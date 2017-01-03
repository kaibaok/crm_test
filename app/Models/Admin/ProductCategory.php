<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'product_category';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title','status'
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

    public static function addCateProduct($data){
        $status = false;
        var_dump($data);
        die;
        if(isset($data)){
            try{
                $status = ProductCategory::create(array(
                    'status' => (int)htmlspecialchars(trim($data['status'])),
                    'title'  => htmlspecialchars(trim($data['title'])),
                ));
            } catch (QueryException $ex){
                return $status;
            }
        }
        return $status;
    }
}
