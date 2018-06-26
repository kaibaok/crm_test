<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brand';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','status','title', 'seo_link','bimg_detail', 'created_at','updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public static function getList(){
        $get_all  = self::all();
        $arr_data = NULL;
        if($get_all){
            $list_data = $get_all->toArray();
            foreach ($get_all as $key => $value) {
                $arr_data[$value['id']] = $value['title'];
            }
        }
        return $arr_data;
    }

    public static function addBrand($data){
        $status = false;
        if(isset($data)){
            try{
                $status = Brand::create(array(
                    'status'      => (int) $data['status'],
                    'title'       => htmlspecialchars(trim($data['title'])),
                    'seo_link'    => trim($data['seo_link']),
                    "bimg_detail" => $data['bimg_detail'],
                ));
            } catch (QueryException $ex){
                return $status;
            }
        }
        return $status;
    }

    public static function editBrand($data){
        $status = false;
        if(isset($data)){
            $arr_update  = array(
                'status'      => (int) $data['status'],
                'title'       => htmlspecialchars(trim($data['title'])),
                'seo_link'    => trim($data['seo_link']),
                "bimg_detail" => $data['bimg_detail'],
            );
            return Brand::where('id',(int)$data['id'])->update($arr_update);
        }
        return $status;
    }

}
