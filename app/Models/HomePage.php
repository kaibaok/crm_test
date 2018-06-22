<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    protected $table = 'home_page';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','created_at','updated_at',
        'title1', 'title2', 'title3', 'title4', 'title5',
        'title6', 'title7', 'title8', 'title9', 'title10',
        'title11', 'title12', 'title13', 'title14', 'title15',
        'himg1', 'himg2', 'himg3', 'himg4', 'himg5', 'himg6',
        'himg7', 'himg8', 'himg9', 'himg10', 'himg11',
        'himg12', 'himg13', 'himg14', 'himg15',
        'link1', 'link2', 'link3', 'link4', 'link5', 'link6',
        'link7', 'link8', 'link9', 'link10', 'link11', 'link12',
        'link13', 'link14', 'link15',
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

    public static function editHomePage($data){
        $status = false;
        if(isset($data)){
            $arr_update  = array(
                'title1'  => $data['title1'],
                'title2'  => $data['title2'],
                'title3'  => $data['title3'],
                'title4'  => $data['title4'],
                'title5'  => $data['title5'],
                'title6'  => $data['title6'],
                'title7'  => $data['title7'],
                'title8'  => $data['title8'],
                'title9'  => $data['title9'],
                'title10' => $data['title10'],
                'title11' => $data['title11'],
                'title12' => $data['title12'],
                'title13' => $data['title13'],
                'title14' => $data['title14'],
                'title15' => $data['title15'],
                "himg1"   => $data['himg1'],
                "himg2"   => $data['himg2'],
                "himg3"   => $data['himg3'],
                "himg4"   => $data['himg4'],
                "himg5"   => $data['himg5'],
                "himg6"   => $data['himg6'],
                "himg7"   => $data['himg7'],
                "himg8"   => $data['himg8'],
                "himg9"   => $data['himg9'],
                "himg10"  => $data['himg10'],
                "himg11"  => $data['himg11'],
                "himg12"  => $data['himg12'],
                "himg13"  => $data['himg13'],
                "himg14"  => $data['himg14'],
                "himg15"  => $data['himg15'],
                "link1"   => $data['link1'],
                "link2"   => $data['link2'],
                "link3"   => $data['link3'],
                "link4"   => $data['link4'],
                "link5"   => $data['link5'],
                "link6"   => $data['link6'],
                "link7"   => $data['link7'],
                "link8"   => $data['link8'],
                "link9"   => $data['link9'],
                "link10"  => $data['link10'],
                "link11"  => $data['link11'],
                "link12"  => $data['link12'],
                "link13"  => $data['link13'],
                "link14"  => $data['link14'],
                "link15"  => $data['link15'],
            );
            return HomePage::where('id',1)->update($arr_update);
        }
        return $status;
    }

}
