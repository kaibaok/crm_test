<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberOnline extends Model
{
    protected $table = 'member_online';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','ip','sid','created_at','updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public static function totalMember()
    {
        $builder = self::SelectRaw("Count(*) as counter");
        return $builder->first();
    }

    public static function checkOnline($time)
    {
        $builder = self::where("created_at", "<" , $time)->delete();

    }
}
