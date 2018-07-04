<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'product_category';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title', 'seo_link','item_id','status','updated_at','created_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    public static function getList($isAll = false, $isShow = false){
        $get_all  = self::all();
        $arr_data = NULL;
        if($get_all){
            foreach ($get_all as $key => $value) {
                $arr_data[$value['id']] = $value['title'];
            }
        }
        return $arr_data;
    }

    public static function addCateProduct($data){
        $status = false;
        if(isset($data)){
            try{
                $status = ProductCategory::create(array(
                    'status'     => (int) $data['status'],
                    'title'      => htmlspecialchars(trim($data['title'])),
                    'seo_link'   => trim($data['seo_link']),
                    'item_id'    => (int) $data['item_id'],
                    "created_at" => date("Y-m-d H:i:s"),
                ));
            } catch (QueryException $ex){
                return $status;
            }
        }
        return $status;
    }

    public static function editCateProduct($data){
        $status = false;
        if(isset($data)){
            $arr_update  = array(
                'status' => (int) $data['status'],
                'title'  => htmlspecialchars(trim($data['title'])),
                'seo_link' => trim($data['seo_link']),
                'item_id'  => (int) $data['item_id'],
            );
            return ProductCategory::where('id',(int)$data['id'])->update($arr_update);
        }
        return $status;
    }

    public static function getListHomePage(){
        $get_all  = self::all();
        $arr_data = NULL;
        if($get_all){
            foreach ($get_all as $key => $value) {
                $arr_data[$value['id']] = array(
                    "title"    => $value['title'],
                    "seo_link" => $value['seo_link'],
                    "item_id"  => $value['item_id'],
                    "status"   => $value['status'],
                );
            }
        }
        return $arr_data;
    }
}
