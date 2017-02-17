<?php

namespace App\Models\Admin;

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
        'id', 'userid', 'name','email', 'address', 'phone', 'registered_date', 'ship_date', 'paid', 'note',
    ];

    public static function addCart($data){
        $status = false;
        if(isset($data)){
            try{
                $status = Cart::create(array(
                    "id_cate"    => (int)htmlspecialchars(trim($data["id_cate"])),
                    "code_id"    => (int)$data['code_id'],
                    "title"      => htmlspecialchars(trim($data["title"])),
                    "desc"       => htmlspecialchars(trim($data["desc"])),
                    "price"      => (int)$data["price"],
                    "type"       => (int)$data["type"],
                    "numbers"    => (int)$data['numbers'],
                    "limit_at"   => htmlspecialchars(trim($data["limit_at"])),
                    "status"     => (int)$data["status"],
                    "img_list"   => $data['img_list'],
                    "img_detail" => $data['img_detail'],
                    "img1"       => $data['img1'],
                    "img2"       => $data['img2'],
                    "img3"       => $data['img3'],
                    "img4"       => $data['img4'],
                    "img5"       => $data['img5'],
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
                "id_cate"    => (int)htmlspecialchars(trim($data["id_cate"])),
                "code_id"    => (int)$data['code_id'],
                "title"      => htmlspecialchars(trim($data["title"])),
                "desc"       => htmlspecialchars(trim($data["desc"])),
                "price"      => (int)$data["price"],
                "type"       => (int)$data["type"],
                "numbers"    => (int)$data['numbers'],
                "limit_at"   => htmlspecialchars(trim($data["limit_at"])),
                "status"     => (int)$data["status"],
                "img_list"   => $data['img_list'],
                "img_detail" => $data['img_detail'],
                "img1"       => $data['img1'],
                "img2"       => $data['img2'],
                "img3"       => $data['img3'],
                "img4"       => $data['img4'],
                "img5"       => $data['img5'],
            );
            return Cart::where('id',(int)$data['id'])->update($arr_update);
        }
        return $status;
    }
}
