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
        "id", "idCate","codeID","name","desc","price","type","limitDate","createdDate","updatedDate","stastus","ord"
    ];

    public static function addProduct($data){
        $status = false;
        if(isset($data)){
            try{
                $status = User::create(array(
                    "idCate"      => (int)htmlspecialchars(trim($date["idCate"])),
                    "codeID"      => (int)htmlspecialchars(trim($date["codeID"])),
                    "name"        => htmlspecialchars(trim($date["name"])),
                    "desc"        => htmlspecialchars(trim($date["desc"])),
                    "price"       => (int)htmlspecialchars(trim($date["price"])),
                    "type"        => (int)htmlspecialchars(trim($date["type"])),
                    "limitDate"   => htmlspecialchars(trim($date["limitDate"])),
                    "createdDate" => htmlspecialchars(trim($date["createdDate"])),
                    "updatedDate" => htmlspecialchars(trim($date["updatedDate"])),
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
