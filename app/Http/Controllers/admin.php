<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Users;
use App\Http\Requests;

class admin extends Controller
{
    public function report(){
        $user = Session::get('user');
        if(empty($user)){
          return View('site.login');
        }else{
            return View('admin.report');
        }
      }
}
