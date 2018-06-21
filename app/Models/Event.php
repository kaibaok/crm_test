<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'event';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','status','title', 'seo_link','eimg_detail','time_open','time_close','desc', 'created_at','updated_at'
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

    public static function addEvent($data){
        $status = false;
        if(isset($data)){
            try{
                $status = Event::create(array(
                    'status'      => (int) $data['status'],
                    'title'       => htmlspecialchars(trim($data['title'])),
                    'seo_link'    => trim($data['seo_link']),
                    "eimg_detail" => $data['eimg_detail'],
                    "time_open"   => $data['time_open'],
                    "time_close"  => $data['time_close'],
                    "desc"        => $data['desc'],
                ));
            } catch (QueryException $ex){
                return $status;
            }
        }
        return $status;
    }

    public static function editEvent($data){
        $status = false;
        if(isset($data)){
            $arr_update  = array(
                'status'      => (int) $data['status'],
                'title'       => htmlspecialchars(trim($data['title'])),
                'seo_link'    => trim($data['seo_link']),
                "eimg_detail" => $data['eimg_detail'],
                "time_open"   => $data['time_open'],
                "time_close"  => $data['time_close'],
                "desc"        => $data['desc'],
            );
            return Event::where('id',(int)$data['id'])->update($arr_update);
        }
        return $status;
    }

}
