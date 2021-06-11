<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Users;
use App\Http\Requests;

class user extends Controller
{
    public function profile(){
        $user = Session::get('user');
        if(empty($user)){
          return View('site.login');
        }else{
            return View('user.profile');
        }
      }
}
