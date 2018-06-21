<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $table = 'news_category';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','status','title', 'seo_link', 'created_at','updated_at'
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

    public static function addNewsCate($data){
        $status = false;
        if(isset($data)){
            try{
                $status = NewsCategory::create(array(
                    'status' => (int) $data['status'],
                    'title'  => htmlspecialchars(trim($data['title'])),
                    'seo_link'  => trim($data['seo_link']),
                ));
            } catch (QueryException $ex){
                return $status;
            }
        }
        return $status;
    }

    public static function editNewsCate($data){
        $status = false;
        if(isset($data)){
            $arr_update  = array(
                'status' => (int) $data['status'],
                'title'  => htmlspecialchars(trim($data['title'])),
                'seo_link'  => trim($data['seo_link']),
            );
            return NewsCategory::where('id',(int)$data['id'])->update($arr_update);
        }
        return $status;
    }

}
