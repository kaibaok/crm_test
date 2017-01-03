<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'product_type';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title','created_at','updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    public static function getList(){
        $get_all  = self::all();
        $arr_data = NULL;
        if($get_all){
            $list_data = $get_all->toArray();
            foreach ($get_all as $key => $value) {
                $arr_data[$value['id']] = $value['title'];
            }
        }
        return $arr_data;
    }

    public static function addTypeProduct($data){
        $status = false;
        if(isset($data)){
            try{
                $status = ProductType::create(array(
                    'title'  => htmlspecialchars(trim($data['title'])),
                ));
            } catch (QueryException $ex){
                return $status;
            }
        }
        return $status;
    }

    public static function editTypeProduct($data){
        $status = false;
        if(isset($data)){
            $arr_update  = array(
                'title'  => htmlspecialchars(trim($data['title'])),
            );
            return ProductType::where('id',(int)$data['id'])->update($arr_update);
        }
        return $status;
    }

}
