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
        'id', 'idCate',"name","desc","price","type","limitDate","createdDate","updatedDate"
    ];

    public static function addProduct($data){
        $status = false;
        if(isset($data)){
            try{
                $status = User::create(array(
                    'idCate'      => htmlspecialchars(trim($data['idCate'])),
                    'name'        => htmlspecialchars(trim($data['name'])),
                    'desc'        => htmlspecialchars(trim($data['desc'])),
                    'price'       => htmlspecialchars(trim($data['price'])),
                    'type'        => htmlspecialchars(trim($data['type'])),
                    'limitDate'   => htmlspecialchars(trim($data['limitDate'])),
                    'createdDate' => htmlspecialchars(trim($data['createdDate'])),
                ));
            } catch (QueryException $ex){
                return $status;
            }
        }
        return $status;
    }

}
