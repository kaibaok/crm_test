<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colors extends Model
{
    protected $table = 'colors';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "id", "name", "code"
    ];

    public static function getList(){
        $get_all  = self::all();
        $arr_data = NULL;
        if($get_all){
            $list_data = $get_all->toArray();
            foreach ($get_all as $key => $value) {
                $arr_data[$value['id']] = array('name' => $value['name'],'code' => $value['code']);
            }
        }
        return $arr_data;
    }

    public static function addColors($data){
        $status = false;
        if(isset($data)){
            try{
                $status = Colors::create(array(
                    "name"    => htmlspecialchars(trim($data["name"])),
                    "code"    => $data['code'],
                ));
            } catch (QueryException $ex){
                return $status;
            }
        }
        return $status;
    }

    public static function editColors($data){
        $status = false;
        if(isset($data)){
            $arr_update  = array(
                "name"    => htmlspecialchars(trim($data["name"])),
                "code"    => $data['code'],
            );
            return Colors::where('id',(int)$data['id'])->update($arr_update);
        }
        return $status;
    }
}
