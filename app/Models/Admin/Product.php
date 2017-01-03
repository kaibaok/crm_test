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
        "id", "idCate","codeID","title","desc","price","type","limit_date","created_date","updated_date","stastus","ord"
    ];

    public static function addProduct($data){
        $status = false;
        if(isset($data)){
            try{
                $status = User::create(array(
                    "idCate"      => (int)htmlspecialchars(trim($date["idCate"])),
                    "codeID"      => (int)htmlspecialchars(trim($date["codeID"])),
                    "title"        => htmlspecialchars(trim($date["title"])),
                    "desc"        => htmlspecialchars(trim($date["desc"])),
                    "price"       => (int)htmlspecialchars(trim($date["price"])),
                    "type"        => (int)htmlspecialchars(trim($date["type"])),
                    "limit_date"   => htmlspecialchars(trim($date["limit_date"])),
                    "created_date" => htmlspecialchars(trim($date["created_date"])),
                    "updated_date" => htmlspecialchars(trim($date["updated_date"])),
                    "stastus"     => (int)htmlspecialchars(trim($date["stastus"])),
                    "ord"         => (int)htmlspecialchars(trim($date["ord"])),
                ));
            } catch (QueryException $ex){
                return $status;
            }
        }
        return $status;
    }

}
