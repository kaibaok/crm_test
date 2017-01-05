<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "id", "id_cate","code_id","title","desc","price","type","limit_at","created_at","updated_at","status","ord"
    ];

    public static function addProduct($data){
        $status = false;
        if(isset($data)){
            try{
                $status = Product::create(array(
                    "id_cate"      => (int)htmlspecialchars(trim($data["id_cate"])),
                    "code_id"      => (int)$data['code_id'],
                    "title"        => htmlspecialchars(trim($data["title"])),
                    "desc"         => htmlspecialchars(trim($data["desc"])),
                    "price"        => (int)$data["price"],
                    "type"         => (int)$data["type"],
                    "limit_at"   => htmlspecialchars(trim($data["limit_at"])),
                    "status"       => (int)$data["status"],
                    "ord"          => (int)$data["ord"],
                ));
            } catch (QueryException $ex){
                return $status;
            }
        }
        return $status;
    }

}
