<?php

namespace App\Helpers;

use Form;

class Utils
{
    public static function createSortLink($arrName, $option, $otherParams = [])
    {
        $colunms     = '';
        $count       = 1;
        foreach ($arrName as $row) {
            if (count($arrName) > 1) {
                $colunms .= "<tr>";
            }
            foreach ($row as $key => $value) {
                $value['count'] = $count;
                $colunms .= self::createOneSortLink($key, $value, $option, $otherParams);
                $count++;
            }
            if (count($arrName) > 1) {
                $colunms .= "</tr>";
            }
        }

        return $colunms;
    }

    /**
     * Create one sort column.
     * @param  [string] $columnTitle        Name of a column
     * @param  [array] $columnAttr        Attributes of a column
     * @param  [array] $option
     * @param  [array] $otherParams
     * @return [string] Return html code
     */
    public static function createOneSortLink($columnTitle, $columnAttr, $option, $otherParams = [])
    {
        $link        = $option['link'];
        $limit       = $option['limit'];
        $arrDir      = ['asc', 'desc'];
        $query       = ! empty($option['query']) ? $option['query'].'&' : null;
        $colunms     = '';
        $otherParams = $otherParams ? '&'.http_build_query($otherParams) : '';
        $title = isset($columnAttr['title']) ? $columnAttr['title'] : '';

        $size = (isset($columnAttr['size']) && $columnAttr['size']) ? 'style="width: '.$columnAttr['size'].'"' : '';
        $rowspan = isset($columnAttr['rowspan']) ? $columnAttr['rowspan'] : 0;
        $colspan = isset($columnAttr['colspan']) ? $columnAttr['colspan'] : 0;
        if ($columnAttr['isSort']) {
            $dir        = '';
            $reverseDir = 'asc';
            if ($option['order'] == $columnAttr['columnName']) {
                $dir        = strtolower($option['dir']);
                $reverseDir = $dir == $arrDir[0] ? $arrDir[1] : $arrDir[0]; //reverse direction
            }
            $colunms .= "<th rowspan='{$rowspan}' colspan='{$colspan}' {$size} class='sortable size{$columnAttr['count']} {$dir}'><a href='{$link}?{$query}order={$columnAttr['columnName']}&dir={$reverseDir}&limit={$limit}&page=1{$otherParams}' title='{$title}'>{$columnTitle}</a></th>";
        } else {
            $colunms .= "<th rowspan='{$rowspan}' colspan='{$colspan}' {$size} class='sortdisable' title='{$title}'><a class='sortdisable' href='javascript:;'>{$columnTitle}</a></th>";
        }
        return $colunms;
    }

    /**
     * Get width - height from provided string.
     * @param  string $str image width and height. Ex: 120x30
     * @return array width and height
     */
    public static function getWidthHeight($str)
    {
        $res = array_map('intval', explode('x', $str));
        if (count($res) !== 2) throw new \Exception('Invalid format. The correct format is widthxheight');
        return $res;
    }

    public static function calc($from, $day, $format = '')
    {
        $format = $format ?: 'Y-m-d';
        if(!$from) $from = date('Y-m-d');
        $str_today = strtotime($from.$day);
        return date($format, $str_today);
    }

    public static function getTreeData($list)
    {
        $GLOBALS['list'] = null;
        $traverse = function ($categories, $prefix = '') use (&$traverse) {
            foreach ($categories as $category) {
                $isLeaf = $category->children->isEmpty();
                    $GLOBALS['list'][] = [
                        "id"     => $category->id,
                        "name"   => $prefix.$category->name_en.' / '.$category->name,
                        "isLeaf" => $isLeaf,
                    ];
                $traverse($category->children, $prefix."----");
            }
        };
        $traverse($list);
        return $GLOBALS['list'];
    }

    public static function keyToLower($array)
    {
        foreach ($array as $key => $value) {
            unset($array[$key]);
            $key = strtolower($key);
            $array[$key] = $value;
        }
        return $array;
    }

    public static function arrayToString($array, $separator = '\n')
    {
        $str = '';
        foreach ($array as $value) {
            $str .= $value.$separator;
        }
        return rtrim($str, $separator);
    }

    public static function getBoundSql($statement, $bindings)
    {
        foreach($bindings as $binding) {
          $value = is_numeric($binding) ? $binding : "'".$binding."'";
          $statement = preg_replace('/\?/', $value, $statement, 1);
        }
        return $statement;
    }

    public static function dateSortDesc($a, $b) {
        return strtotime($b) - strtotime($a);
    }

    public static function checkKingSurveyAnswerExist($number)
    {
        return \Schema::connection(Country::getDbConnection())
            ->hasTable('king_survey_'.$number);
    }

    public static function getRadioRangeDownload($limit, $total) {
        $pages              = ceil($total / $limit);
        $radioRangeDownload = array();
        for ($i=0; $i < $pages; $i++) {
            $endOfRange = ($i + 1) * $limit;
            if ($endOfRange > $total) {
                $endOfRange = $total;
            }
            $radioRangeDownload[$i] = array (
                "value"   => $i * $limit,
                "content" => $i * $limit + 1 ." - ".$endOfRange,
            );
        }

        return $radioRangeDownload;
    }

    public static function convertArrayToCSVString($arrayData, $delimiter = ',', $enclosure = '"')
    {
        if (!$arrayData) {
            return "";
        }

        $handle = fopen('php://temp', 'r+');
        fprintf($handle, chr(0xEF).chr(0xBB).chr(0xBF));
        foreach ($arrayData as $line) {
            fputcsv($handle, $line, $delimiter, $enclosure);
        }
        rewind($handle);
        $contents = "";
        while (!feof($handle)) {
            $contents .= fread($handle, 8192);
        }
        fclose($handle);
        return $contents;
    }

    public static function meaningfulFileName($array, $extension = 'csv')
    {
        $fileName = implode('_', $array);
        $fileName .= '.' . $extension;
        return $fileName;
    }

    public static function getArrayData($data, $type)
    {
        $dataCSV = null;
        switch ($type) {
            case 'okmember':
            case 'activemember':
            case 'login':
                foreach ($data as $key => $value) {
                    switch (app(Country::CURRENT_COUNTRY)) {
                        case VIETNAM:
                            $dataCSV[] = [
                                $value->UserID,
                                $value->IsSentCard,
                                $value->gender,
                                $value->birthday,
                                $value->Married,
                                $value->ProvinceID,
                                $value->HomeModel,
                                $value->Duty,
                                $value->StudyLevel,
                                $value->CareerID,
                                $value->IncomeOfFamilyID,
                                $value->OwnIncomeID,
                                $value->HusbandOrWife,
                                $value->Father_mother,
                                $value->Grandparent,
                                $value->Children,
                                $value->Grandson,
                                $value->Other_person,
                                $value->children_birthday,
                                $value->last_login_platform,
                                Member::getUserAgentCode($value->last_login_platform),
                                $value->last_answer_platform,
                                Member::getUserAgentCode($value->last_answer_platform),
                            ];
                            break;
                        case INDO:
                            $dataCSV[] = [
                                $value->UserID,
                                $value->IsSentCard,
                                $value->gender,
                                $value->birthday,
                                $value->Married,
                                $value->Duty,
                                $value->CareerID,
                                $value->ProvinceID,
                                $value->LivingCity,
                                $value->SwitchBoard,
                                $value->Children,
                                $value->ChildOfBirth,
                                $value->MemberOfFamily,
                                $value->IncomeOfFamilyID,
                                $value->OwnIncomeID,
                                $value->NumberCar,
                                $value->last_login_platform,
                                Member::getUserAgentCode($value->last_login_platform),
                                $value->last_answer_platform,
                                Member::getUserAgentCode($value->last_answer_platform),
                            ];
                            break;
                        case THAILAND:
                            $dataCSV[] = [
                                $value->UserID,
                                $value->IsSentCard,
                                $value->gender,
                                $value->birthday,
                                $value->Married,
                                $value->Duty,
                                $value->CareerID,
                                $value->ProvinceID,
                                $value->SwitchBoard,
                                $value->Children,
                                $value->ChildOfBirth,
                                $value->MemberOfFamily,
                                $value->IncomeOfFamilyID,
                                $value->OwnIncomeID,
                                $value->last_login_platform,
                                Member::getUserAgentCode($value->last_login_platform),
                                $value->last_answer_platform,
                                Member::getUserAgentCode($value->last_login_platform),
                            ];
                            break;
                    }
                    unset($data[$key]);
                }
            break;

        }
        return $dataCSV;
    }

    public static function getAddressOption($type, $selectedID, $others = [])
    {
        $countryID = (int) app(Country::CURRENT_COUNTRY);
        if (in_array($type, ['county', 'ward']) && $countryID !== VIETNAM) {
            return '';
        }
        $attributes = [
            'class'         => 'form-control',
            'data-validate' => 'required',
        ];
        switch ($type) {
            case 'province':
                $name       = 'ProvinceID';
                $list       = Province::getAllProvinceOption();
                $attributes['onchange'] = $countryID === VIETNAM ? 'med.reloadOption("county")' : 'med.reload_livingcity()';
                break;
            case 'county':
                $name       = 'CountyID';
                $provinceID = isset($others['ProvinceID']) ? $others['ProvinceID'] : '';
                $list       = County::getCountyOptionByProvince($provinceID);
                $attributes['onchange'] = 'med.reloadOption("ward")';
                break;
            case 'ward':
                $name       = 'WardID';
                $countyID   = isset($others['CountyID']) ? $others['CountyID'] : '';
                $list       = WardCounty::getWardOptionByCounty($countyID);
                break;
            default:
                $name = '';
                $list = [];
                break;
        }
        $select = Form::select($name, $list, $selectedID, $attributes);
        return $select;
    }

    public static function resultBlockOTP($str)
    {
        return 'OTP_'.Carbon::now()->timestamp.'_'.$str;
    }

    public static function resultDisable($str)
    {
        return 'disabled_'.Carbon::now()->timestamp.'_'.$str;
    }

    public static function rotateImage($image, $degrees) {
        $infoImg = getimagesize(urldecode($image));
        switch($infoImg['mime']) {
            case "image/gif":
                $source = imagecreatefromgif($image);
                break;
            case "image/pjpeg":
            case "image/jpeg":
            case "image/jpg":
                $source = imagecreatefromjpeg($image);
                break;
            case "image/png":
            case "image/x-png":
                $source = imagecreatefrompng($image);
                break;
        }

        $file = imagerotate($source, $degrees, 0);

        switch($infoImg['mime']) {
            case "image/gif":
                imagegif($file, $image);
                break;
            case "image/pjpeg":
            case "image/jpeg":
            case "image/jpg":
                imagejpeg($file, $image);
                break;
            case "image/png":
            case "image/x-png":
                imagepng($file, $image);
                break;
        }

        return $image;
    }
}
