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
        "brand","type_price","discount","percent",
        "size_xs","size_s","size_m","size_l","size_xl"
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
                    "discount"     => (int)$data["discount"],
                    "percent"      => (int)$data["percent"],
                    "created_at"   => date("Y-m-d H:i:s"),
                    "size_xs"      => isset($data["size_xs"]) ? (int) $data["size_xs"] : 0,
                    "size_s"       => isset($data["size_s"]) ? (int) $data["size_s"] : 0,
                    "size_m"       => isset($data["size_m"]) ? (int) $data["size_m"] : 0,
                    "size_l"       => isset($data["size_l"]) ? (int) $data["size_l"] : 0,
                    "size_xl"      => isset($data["size_xl"]) ? (int) $data["size_xl"] : 0,
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
                "discount"     => (int)$data["discount"],
                "percent"      => (int)$data["percent"],
                "size_xs"      => isset($data["size_xs"]) ? (int) $data["size_xs"] : 0,
                "size_s"       => isset($data["size_s"]) ? (int) $data["size_s"] : 0,
                "size_m"       => isset($data["size_m"]) ? (int) $data["size_m"] : 0,
                "size_l"       => isset($data["size_l"]) ? (int) $data["size_l"] : 0,
                "size_xl"      => isset($data["size_xl"]) ? (int) $data["size_xl"] : 0,
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


    public static function getByArrCateUP($list)
    {
        if(empty($list)) return null;
        $list    = explode("|", $list);
        $arrProduct = null;
        foreach ($list as $key => $value) {
           $arrProduct[$value] = Product::where("id_cate",$value)
            ->where("status", 1)
            ->orderByRaw("ord ASC, id DESC")
            ->get()
            ->toArray();
        }
        return $arrProduct;
    }

    public static function getListByTypeUP($list)
    {
        if(empty($list)) return null;
        $list    = explode("|", $list);
        $arrProduct = null;
        foreach ($list as $key => $value) {
           $arrProduct[$value] = Product::where("type",$value)
            ->where("status", 1)
            ->orderByRaw("ord ASC, id DESC")
            ->get()
            ->toArray();
        }
        return $arrProduct;
    }
}
