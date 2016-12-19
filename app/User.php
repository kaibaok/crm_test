<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\QueryException;
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
		'name', 'email', 'password',
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
					'permission' => htmlspecialchars(trim($data['permission'])),
				));
			} catch (QueryException $ex){
				return $status;
			}
		}
		return $status;
	}

}
