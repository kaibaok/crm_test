<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    protected $table = 'cart_detail';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'cart_id', 'product_id','name',
         'price','dprice','number', 'color', 'created_at','updated_at'
    ];

    public static function addCartDetail($data){
        $status = false;
        if(isset($data)){
            try{
                $status = CartDetail::create(array(
                  'cart_id'    => $data['cart_id'],
                  'product_id' => (int) $data['product_id'],
                  'name'       => trim(strip_tags($data['name'])),
                  'price'      => $data['price'],
                  'dprice'     => $data['dprice'],
                  'number'     => (int) $data['number'],
                  'color'      => (int) $data['color'],
                  'created_at' => date("Y-m-d H:i:s"),
                ));
            } catch (QueryException $ex){
                return $status;
            }
        }
        return $status;
    }

    public static function editCartDetail($data){
        $status = false;
        if(isset($data)){
            $arr_update  = array(
              'cart_id'    => $data['cart_id'],
              'product_id' => (int) $data['product_id'],
              'name'       => trim(strip_tags($data['name'])),
              'price'      => $data['price'],
              'dprice'     => $data['dprice'],
              'number'     => (int) $data['number'],
              'color'      => (int) $data['color'],
            );
            return CartDetail::where('id',(int)$data['id'])->update($arr_update);
        }
        return $status;
    }
}
