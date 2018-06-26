<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ProductItem extends Model
{
    protected $table = 'product_item';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title', 'seo_link','status','created_at','updated_at'
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

    public static function addItemProduct($data){
        $status = false;
        if(isset($data)){
            try{
                $status = ProductItem::create(array(
                    'status'   => (int) $data['status'],
                    'title'    => htmlspecialchars(trim($data['title'])),
                    'seo_link' => trim($data['seo_link']),
                ));
            } catch (QueryException $ex){
                return $status;
            }
        }
        return $status;
    }

    public static function editItemProduct($data){
        $status = false;
        if(isset($data)){
            $arr_update  = array(
                'status'   => (int) $data['status'],
                'title'    => htmlspecialchars(trim($data['title'])),
                'seo_link' => trim($data['seo_link']),
            );
            return ProductItem::where('id',(int)$data['id'])->update($arr_update);
        }
        return $status;
    }

    public static function getListTabHome()
    {
        $data = DB::table('product_item')
            ->selectRaw("product_item.id as id_item,
                product_item.title as title_item,
                product_item.seo_link as item_seo_link,
                product_category.title as title_category,
                product_category.id as id_category,
                product_category.seo_link as category_seo_link")
            ->join("product_category", "product_category.item_id", "=", "product_item.id")
            ->orderBy("product_item.id", "DESC")
            ->get();
        $listItem = null;
        if($data) {
            foreach ($data as $key => $value) {
                $listItem['item'][$value->id_item] = $value->title_item;
                $listItem['category'][$value->id_item][$value->id_category] = array(
                    "title_item"        => $value->title_item,
                    "item_seo_link"     => $value->item_seo_link,
                    "title_category"    => $value->title_category,
                    "id_category"       => $value->id_category,
                    "category_seo_link" => $value->category_seo_link,
                );
            }
        }
        return $listItem;
    }

}
