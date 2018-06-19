<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    //attribute dac sac, xu huong, tre trung, thanh lich

    protected $fillable = [
        "id","id_cate","title","short_desc","desc",
        "created_at","updated_at","status","ord",
        "nimg_list","nimg_detail","is_hot","seo_link"
    ];

    public static function addNews($data){
        $status = false;
        if(isset($data)){
            try{
                $status = News::create(array(
                    "id_cate"     => (int)htmlspecialchars(trim($data["id_cate"])),
                    "title"       => htmlspecialchars(trim($data["title"])),
                    "short_desc"  => $data["short_desc"],
                    "desc"        => $data["desc"],
                    "status"      => isset($data['status']) ? $data['status'] : 0,
                    "created_at"  => isset($data['created_at']) ? $data['created_at'] : date("Y-m-d H:i:s"),
                    "nimg_list"   => $data['nimg_list'],
                    "nimg_detail" => $data['nimg_detail'],
                    "is_hot"      => isset($data["is_hot"]) ? (int) $data["is_hot"] : 0,
                    "seo_link"    => isset($data["seo_link"]) ? trim($data["seo_link"]) : '',
                ));
            } catch (QueryException $ex){
                return $status;
            }
        }
        return $status;
    }

    public static function editNews($data){
        $status = false;
        if(isset($data)){
            $arr_update  = array(
                "id_cate"     => (int)htmlspecialchars(trim($data["id_cate"])),
                "title"       => htmlspecialchars(trim($data["title"])),
                "short_desc"  => $data["short_desc"],
                "desc"        => $data["desc"],
                "status"      => isset($data['status']) ? $data['status'] : 0,
                "created_at"  => isset($data['created_at']) ? $data['created_at'] : date("Y-m-d H:i:s"),
                "nimg_list"   => $data['nimg_list'],
                "nimg_detail" => $data['nimg_detail'],
                "is_hot"      => isset($data["is_hot"]) ? (int) $data["is_hot"] : 0,
                "seo_link"    => isset($data["seo_link"]) ? trim($data["seo_link"]) : '',
            );
            return News::where('id',(int)$data['id'])->update($arr_update);
        }
        return $status;
    }

    public static function searchOption($txt_search){
        $mdlNews = News::where('title','like',"%{$txt_search}%")->get();
        $arr_data = NULL;
        if($mdlNews){
            $arr_data = $mdlNews->toArray();
        }
        return $arr_data;
    }

    public static function getList(){
        $get_all  = self::all();
        $arr_data = NULL;
        if($get_all){
            $arr_data = $get_all->toArray();
        }
        return $arr_data;
    }


}
