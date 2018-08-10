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
        'price','dprice','number', 'color','size',
        'created_at','updated_at'
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
                  'size'       =>  $data['size'],
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
              'product_id' => (int) $data['product_id'],
              'name'       => trim(strip_tags($data['name'])),
              'price'      => $data['price'],
              'dprice'     => $data['dprice'],
              'number'     => (int) $data['number'],
              'color'      => (int) $data['color'],
              'size'       =>  $data['size'],
            );
            return CartDetail::where('id',(int)$data['id'])->update($arr_update);
        }
        return $status;
    }

    public static function getListByID($id)
    {
      $data = self::selectRaw("cart_detail.id , cart_detail.cart_id, cart_detail.product_id, product.title,
        cart_detail.price, cart_detail.dprice, cart_detail.number, colors.code, cart_detail.created_at, cart_detail.size")
      ->leftJoin("product", "cart_detail.product_id", "=", "product.id")
      ->leftJoin("colors", "cart_detail.color", "=", "colors.id")
      ->where("cart_detail.cart_id", "=", $id)
      ->orderBy("cart_detail.id", "ASC")
      ->get();
      return $data;
    }
}
