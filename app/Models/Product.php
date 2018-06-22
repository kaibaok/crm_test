<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    //attribute dac sac, xu huong, tre trung, thanh lich

    protected $fillable = [
        "id", "id_cate","code_id","title","short_desc","desc",
        "price","type","numbers","limit_at",
        "created_at","updated_at","status","ord",
        "pimg_list","pimg_detail","pimg1","pimg2","pimg3",
        "pimg4","pimg5","colors","is_new","is_best_sell","attribute","seo_link",
        "brand","type_price"
    ];

    public static function addProduct($data){
        $status = false;
        if(isset($data)){
            try{
                $status = Product::create(array(
                    "id_cate"      => (int)htmlspecialchars(trim($data["id_cate"])),
                    "code_id"      => (int)$data['code_id'],
                    "title"        => htmlspecialchars(trim($data["title"])),
                    "short_desc"   => $data["short_desc"],
                    "desc"         => $data["desc"],
                    "price"        => (int)$data["price"],
                    "type"         => (int)$data["type"],
                    "numbers"      => (int)$data['numbers'],
                    "limit_at"     => htmlspecialchars(trim($data["limit_at"])),
                    "status"       => (int)$data["status"],
                    "pimg_list"    => $data['pimg_list'],
                    "pimg_detail"  => $data['pimg_detail'],
                    "pimg1"        => $data['pimg1'],
                    "pimg2"        => $data['pimg2'],
                    "pimg3"        => $data['pimg3'],
                    "pimg4"        => $data['pimg4'],
                    "pimg5"        => $data['pimg5'],
                    "is_new"       => isset($data["is_new"]) ? (int) $data["is_new"] : 0,
                    "is_best_sell" => isset($data["is_best_sell"]) ? (int) $data["is_best_sell"] : 0,
                    "colors"       => isset($data['colors']) ? implode("|", $data['colors']): "",
                    "seo_link"     => isset($data["seo_link"]) ? $data["seo_link"] : "",
                    "brand"        => (int)$data["brand"],
                    "type_price"   => (int)$data["type_price"],
                ));
            } catch (QueryException $ex){
                return $status;
            }
        }
        return $status;
    }

    public static function editProduct($data){
        $status = false;
        if(isset($data)){
            $arr_update  = array(
                "id_cate"      => (int)htmlspecialchars(trim($data["id_cate"])),
                "code_id"      => (int)$data['code_id'],
                "title"        => htmlspecialchars(trim($data["title"])),
                "short_desc"   => $data["short_desc"],
                "desc"         => $data["desc"],
                "price"        => (int)$data["price"],
                "type"         => (int)$data["type"],
                "numbers"      => (int)$data['numbers'],
                "limit_at"     => htmlspecialchars(trim($data["limit_at"])),
                "status"       => (int)$data["status"],
                "pimg_list"    => $data['pimg_list'],
                "pimg_detail"  => $data['pimg_detail'],
                "pimg1"        => $data['pimg1'],
                "pimg2"        => $data['pimg2'],
                "pimg3"        => $data['pimg3'],
                "pimg4"        => $data['pimg4'],
                "pimg5"        => $data['pimg5'],
                "is_new"       => isset($data["is_new"]) ? (int) $data["is_new"] : 0,
                "is_best_sell" => isset($data["is_best_sell"]) ? (int) $data["is_best_sell"] : 0,
                "colors"       => isset($data['colors']) ? implode("|", $data['colors']): "",
                "seo_link"     => isset($data["seo_link"]) ? $data["seo_link"] : "",
                "brand"        => (int)$data["brand"],
                "type_price"   => (int)$data["type_price"],
            );
            return Product::where('id',(int)$data['id'])->update($arr_update);
        }
        return $status;
    }

    public static function searchOption($txt_search){
        $m_product = Product::where('code_id', 'like', "%{$txt_search}%")
                    ->orWhere('title','like',"%{$txt_search}%")
                    ->orWhere('desc','like',"%{$txt_search}%")
                    ->orWhere('short_desc','like',"%{$txt_search}%")
                    ->get();
        $arr_data = NULL;
        if($m_product){
            $arr_data = $m_product->toArray();
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
