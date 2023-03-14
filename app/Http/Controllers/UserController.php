<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User as userModel;

class UserController extends Controller
{
    function auth()
	{
		$usrname	= $_POST['username'];
		$usrpass		= $_POST['userpass'];

		$result_username = userModel::validation_username( $usrname );
		if( $result_username ){

		}else{
			Controller::alert_back("사용자 아이디가 존재하지 않습니다.");
			exit;
		}

		$result_pass = userModel::validation_password( $usrname, $usrpass );

		if( $result_pass ){

		}else{
			Controller::alert_back("비밀번호가 정확하지 않습니다.");
			exit;
		}

		return view('dashboard');
	}
}
