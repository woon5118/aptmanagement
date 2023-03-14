<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

	public static function validation_username( $usrname )
	{
		$res = DB::table('usermaster')->where( 'id', '=', $usrname )->get();
		$res = json_decode( $res );

		if( count( $res ) > 0 ){
			return true;
		}else{
			return false;
		}
	}

	public static function validation_password( $usrname, $usrpass )
	{
		$res = DB::table('usermaster')->where( 'id', '=', $usrname )->get();
		$res = json_decode( $res );

		if( count( $res ) > 0 ){
			if( $res[0]->pw == $usrpass ){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
}
