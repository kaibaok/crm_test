<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    //attribute dac sac, xu huong, tre trung, thanh lich

    protected $fillable = [
        "id","list", "list_sp","created_at","updated_at"
    ];

    public static function editMenu($data){
        $status = false;
        if(isset($data)){
            $arr_update  = array(
                "list"    => $data["list"],
                "list_sp" => $data["list_sp"],
            );
            return Menu::where('id',1)->update($arr_update);
        }
        return $status;
    }
}
