<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiscountCode extends Model
{
    protected $table = 'discount_code';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','status','code','number', 'end_date','created_at','updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public static function getList(){
        $get_all  = self::all();
        $arr_data = NULL;
        if($get_all){
            $list_data = $get_all->toArray();
            foreach ($get_all as $key => $value) {
                $arr_data[$value['id']] = $value['code'];
            }
        }
        return $arr_data;
    }

    public static function addDiscountCode($data){
        $status = false;
        if(isset($data)){
            try{
                $status = DiscountCode::create(array(
                    'status'     => (int) $data['status'],
                    'code'       => $data['code'],
                    "created_at" => date("Y-m-d H:i:s"),
                    "end_date"   => $data['end_date'],
                    'number'     => (int) $data['number'],
                ));
            } catch (QueryException $ex){
                return $status;
            }
        }
        return $status;
    }

    public static function editDiscountCode($data){
        $status = false;
        if(isset($data)){
            $arr_update  = array(
                'status'     => (int) $data['status'],
                'code'       => $data['code'],
                "created_at" => date("Y-m-d H:i:s"),
                "end_date"   => $data['end_date'],
                'number'     => (int) $data['number'],
            );
            return DiscountCode::where('id',(int)$data['id'])->update($arr_update);
        }
        return $status;
    }

}
