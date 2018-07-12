<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tag';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','status','title', 'link','created_at','updated_at'
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
                $arr_data[$value['id']] = $value['title'];
            }
        }
        return $arr_data;
    }

    public static function addTag($data){
        $status = false;
        if(isset($data)){
            try{
                $status = Tag::create(array(
                    'status'     => (int) $data['status'],
                    'title'      => $data['title'],
                    "created_at" => date("Y-m-d H:i:s"),
                    'link'       => $data['link'],
                ));
            } catch (QueryException $ex){
                return $status;
            }
        }
        return $status;
    }

    public static function editTag($data){
        $status = false;
        if(isset($data)){
            $arr_update  = array(
                'status' => (int) $data['status'],
                'title'  => $data['title'],
                'link'   => $data['link'],
            );
            return Tag::where('id',(int)$data['id'])->update($arr_update);
        }
        return $status;
    }

}
