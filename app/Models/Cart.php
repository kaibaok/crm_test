<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cart extends Model
{
    protected $table = 'cart';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'userid', 'full_name','email',
         'address1', 'address2', 'phone', 'stage',
          'district', 'city', 'ship_date','paid',
          'note','code','created_at','updated_at'
    ];

    public static function addCart($data){
        $status = false;
        if(isset($data)){
            try{
                $status = Cart::create(array(
                   "userid"     => $data['userid'],
                   "full_name"  => $data['full_name'],
                   "email"      => $data['email'],
                   "phone"      => $data['phone'],
                   "address1"   => $data['address1'],
                   "address2"   => $data['address2'],
                   "city"       => $data['city'],
                   "stage"      => $data['stage'],
                   "district"   => $data['district'],
                   "ship_date"  => "0000-00-00",
                   "paid"       => 0,
                   "note"       => $data['note'],
                   "code"       => $data['code'],
                   "created_at" => date("Y-m-d H:i:s"),
                ));
            } catch (QueryException $ex){
                return $status;
            }
        }
        return $status;
    }

    public static function editCart($data){
        $status = false;
        if(isset($data)){
            $arr_update  = array(
                "full_name"  => $data['full_name'],
                "email"      => $data['email'],
                "phone"      => $data['phone'],
                "address1"   => $data['address1'],
                "address2"   => $data['address2'],
                "city"       => $data['city'],
                "stage"      => $data['stage'],
                "district"   => $data['district'],
                "ship_date"  => $data['ship_date'],
                "paid"       => $data['paid'],
                "note"       => $data['note'],
                "code"       => $data['code'],
            );
            return Cart::where('id',(int)$data['id'])->update($arr_update);
        }
        return $status;
    }

    public static function getBarChart($year){
        // 12 month of year
        $builder = DB::select(
          DB::Raw("SELECT SUM(data.value) total , month FROM (
            SELECT cart_id, (CASE WHEN (discount_code.type_discount is null) THEN total ELSE
                  CASE WHEN (discount_code.type_discount > 0) THEN total - discount_code.discount_price
                  ELSE total - (total * discount_code.percent / 100) END
              END) as value,
              month
              FROM (SELECT cart.id as cart_id,
                SUM(CASE WHEN (cart_detail.dprice > 0)
                THEN cart_detail.dprice * cart_detail.number
                ELSE cart_detail.price * cart_detail.number
                END) as total, cart.code, MONTH(cart.created_at) as month
              FROM cart
              INNER JOIN cart_detail
              ON cart.id = cart_detail.cart_id
              WHERE YEAR(cart.created_at) = {$year}
              GROUP BY cart.id, cart.code, month) as tt
            LEFT JOIN discount_code
            ON tt.code = discount_code.code) as data
            GROUP BY month"));

        $list = null;
        if(!empty($builder)) {
          foreach ($builder as $key => $value) {
              $list[$value->month] = (float) $value->total;
          }
        }
        for ($i=1; $i <= 12 ; $i++) if(empty($list[$i])) $list[$i] = 0;
        return $list;
    }
}
