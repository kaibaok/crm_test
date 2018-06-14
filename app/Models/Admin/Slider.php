<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'slider';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    //attribute dac sac, xu huong, tre trung, thanh lich

    protected $fillable = [
        "id","title","link",
        "created_at","updated_at","status",
        "img_detail",
    ];

    public static function addSlider($data){
        $status = false;
        if(isset($data)){
            try{
                $status = Slider::create(array(
                    "id_cate"    => (int)htmlspecialchars(trim($data["id_cate"])),
                    "title"      => htmlspecialchars(trim($data["title"])),
                    "link"      => trim($data["link"]),
                    "status"     => isset($data['status']) ? $data['status'] : 0,
                    "created_at" => isset($data['created_at']) ? $data['created_at'] : date("Y-m-d H:i:s"),
                    "img_detail" => $data['img_detail'],
                ));
            } catch (QueryException $ex){
                return $status;
            }
        }
        return $status;
    }

    public static function editSlider($data){
        $status = false;
        if(isset($data)){
            $arr_update  = array(
                "id_cate"    => (int)htmlspecialchars(trim($data["id_cate"])),
                "title"      => htmlspecialchars(trim($data["title"])),
                "link"      => trim($data["link"]),
                "status"     => isset($data['status']) ? $data['status'] : 0,
                "created_at" => isset($data['created_at']) ? $data['created_at'] : date("Y-m-d H:i:s"),
                "img_detail" => $data['img_detail'],
            );
            return Slider::where('id',(int)$data['id'])->update($arr_update);
        }
        return $status;
    }

    public static function searchOption($txt_search){
        $mdlSlider = Slider::where('title','like',"%{$txt_search}%")->get();
        $arr_data = NULL;
        if($mdlSlider){
            $arr_data = $mdlSlider->toArray();
        }
        return $arr_data;
    }

    public static function getList(){
        $get_all  = self::all();
        $arr_data = NULL;
        if($get_all){
            $arr_data = $get_all->toArray();
        }
        return $arr_data;
    }


}
