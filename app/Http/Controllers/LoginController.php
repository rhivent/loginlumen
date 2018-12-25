<?php

namespace App\Http\Controllers;

use App\Models\Login_model;

class LoginController extends Controller
{
    public function __construct()
    {
        //
    }

    public function getLogin($id,Login_model $login){
		$login = $login->withId($id)->first();
		
		// dd($login->password);
		//jika field balance mengalami perubahan maka dibuat di Models
		
		dd($login->username);
	}
}
