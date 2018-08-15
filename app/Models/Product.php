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
        "size"
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
                    "size"         => implode("|",$data['size']),
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
                "size"         => implode("|",$data['size'])
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


    public static function getProductByConditions($params)
    {
        $builder = self::select(
            'product.*',
            'product_category.title as title_category',
            'product_category.seo_link as seo_link_category',
            'product_item.title as title_item',
            'product_item.seo_link as seo_link_item',
            'product_type.title as title_type',
            'product_type.seo_link as seo_link_type',
            'brand.title as title_brand',
            'brand.seo_link as seo_link_brand')
            ->join('product_category', 'product.id_cate', '=', 'product_category.id')
            ->join('product_item', 'product_category.item_id', '=', 'product_item.id')
            ->join('product_type', 'product.type', '=', 'product_type.id')
            ->join('brand', 'product.brand', '=', 'brand.id')
            ->where('product.status', 1)
            ->where('product_category.status', 1)
            ->where('product_item.status', 1)
            ->where('brand.status', 1);

        if(!empty($params['product'])) $builder->where('product.id', (int) $params['product']);
        if(!empty($params['category'])) $builder->where('product.id_cate', (int) $params['category']);
        if(!empty($params['brand'])) $builder->where('product.brand', (int) $params['brand']);
        if(!empty($params['type'])) $builder->where('product.type', (int) $params['type']);
        if(!empty($params['item'])) $builder->where('product_category.item_id', (int) $params['item']);
        if(!empty($params['keywords'])) $builder->where("product.title","like", "%".htmlspecialchars(strip_tags($params['keywords']))."%");

        if(!empty($params['size'])) {
            switch ($params['size']) {
                case 'xs':
                    $builder->where('product.size_xs', 1);
                    break;
                case 's':
                    $builder->where('product.size_s', 1);
                    break;
                case 'm':
                    $builder->where('product.size_m', 1);
                    break;
                case 'l':
                    $builder->where('product.size_l', 1);
                    break;
                case 'xl':
                    $builder->where('product.size_xl', 1);
                    break;
            }
        }

        if(!empty($params['minimum_price']) && !empty($params['maximum_price']))
            $builder->whereBetween('product.price', [(int) $params['minimum_price'], (int) $params['maximum_price']]);

        $builder->orderByRaw("product.ord ASC, product.id DESC");
        return $builder;
    }

    public static function getListByIds($listID){
        $listProduct = self::whereIn("id", $listID)->get();
        $arr_data = null;
        foreach ($listProduct as $key => $value) {
            $arr_data[$value->id] = array(
                "price" => $value->price,
                "discount" => $value->discount,
            );
        }
        return $arr_data;
    }

    // get list product autocompelete
    public static function getProductByKey($keywords)
    {
        $listProduct  = self::where("title" , "like", "%{$keywords}%")
            ->where("numbers" , ">" , 0)
            ->get();
        $arr = null;
        foreach ($listProduct as $key => $value) {
            $arr[] = array(
                "id"       => $value->id,
                "label"    => $value->title,
                "value"    => $value->title,
                "price"    => $value->price,
                "discount" => $value->discount,
                "numbers"  => $value->numbers,
                "colors"   => explode("|", $value->colors),
                "sizes"   => explode("|", $value->size),
            );
        }
        return $arr;
    }

}


