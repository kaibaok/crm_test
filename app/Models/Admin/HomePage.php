<?php

namespace App\Models\Admin;

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
        'himg12', 'himg13', 'himg14', 'himg15'
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
                'title1'  => htmlspecialchars(trim($data['title1'])),
                'title2'  => htmlspecialchars(trim($data['title2'])),
                'title3'  => htmlspecialchars(trim($data['title3'])),
                'title4'  => htmlspecialchars(trim($data['title4'])),
                'title5'  => htmlspecialchars(trim($data['title5'])),
                'title6'  => htmlspecialchars(trim($data['title6'])),
                'title7'  => htmlspecialchars(trim($data['title7'])),
                'title8'  => htmlspecialchars(trim($data['title8'])),
                'title9'  => htmlspecialchars(trim($data['title9'])),
                'title10' => htmlspecialchars(trim($data['title10'])),
                'title11' => htmlspecialchars(trim($data['title11'])),
                'title12' => htmlspecialchars(trim($data['title12'])),
                'title13' => htmlspecialchars(trim($data['title13'])),
                'title14' => htmlspecialchars(trim($data['title14'])),
                'title15' => htmlspecialchars(trim($data['title15'])),
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
            );
            return HomePage::where('id',(int)$data['id'])->update($arr_update);
        }
        return $status;
    }

}
