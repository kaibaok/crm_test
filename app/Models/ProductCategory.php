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

    public static function addCateProduct($data){
        $status = false;
        if(isset($data)){
            try{
                $status = ProductCategory::create(array(
                    'status'   => (int) $data['status'],
                    'title'    => htmlspecialchars(trim($data['title'])),
                    'seo_link' => trim($data['seo_link']),
                    'item_id'  => (int) $data['item_id'],
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
}
