<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
