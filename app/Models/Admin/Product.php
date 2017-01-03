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
        "id", "id_cate","code_id","title","desc","price","type","limit_date","created_date","updated_date","stastus","ord"
    ];

    public static function addProduct($data){
        $status = false;
        if(isset($data)){
            try{
                $status = User::create(array(
                    "id_cate"      => (int)htmlspecialchars(trim($data["id_cate"])),
                    "code_id"      => (int)$data['code_id'],
                    "title"        => htmlspecialchars(trim($data["title"])),
                    "desc"         => htmlspecialchars(trim($data["desc"])),
                    "price"        => (int)$data["price"],
                    "type"         => (int)$data["type"],
                    "limit_date"   => htmlspecialchars(trim($data["limit_date"])),
                    "created_date" => htmlspecialchars(trim($data["created_date"])),
                    "updated_date" => htmlspecialchars(trim($data["updated_date"])),
                    "stastus"      => (int)$data["stastus"],
                    "ord"          => (int)$data["ord"],
                ));
            } catch (QueryException $ex){
                return $status;
            }
        }
        return $status;
    }

}
