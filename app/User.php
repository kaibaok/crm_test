<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class User extends  Authenticatable
{

	protected $table = 'users';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password','permission','gender'
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	public static function addUser($data){
		$status = false;
		if(isset($data)){
			try{
				$status = User::create(array(
					'name'       => htmlspecialchars(trim($data['name'])),
					'password'   => bcrypt(htmlspecialchars(trim($data['password']))),
					'email'      => htmlspecialchars(trim($data['email'])),
					'gender'     => (isset($data['gender'])) ? htmlspecialchars(trim($data['gender'])) : 0,
					'permission' => (int)$data['permission']
				));
			} catch (QueryException $ex){
				return $status;
			}
		}
		return $status;
	}

	public static function editUser($data){
		$status = false;
		if(isset($data)){
			$arr_update  = array(
				"name"       => htmlspecialchars(trim($data['name'])),
				"email"      => htmlspecialchars(trim($data['email'])),
				"gender"     => htmlspecialchars(trim($data['gender'])),
				"permission" => (int)$data['permission'],
			);

			if(!empty($data['password'])) $arr_update["password"]   = bcrypt(htmlspecialchars(trim($data['password'])));

			return User::where('id',$data['id'])->update($arr_update);

		}
		return $status;
	}

	public static function searchOption($txt_search){
		$m_user = User::where('name','like',"%{$txt_search}%")->orWhere('email','like',"%{$txt_search}%")->get();
		$arr_data = NULL;
		if($m_user){
			$arr_data = $m_user->toArray();
		}
		return $arr_data;
	}

}
