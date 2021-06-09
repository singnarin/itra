<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Users;
use App\Http\Requests;

class index extends Controller
{
    public function signup(){
        return View('site.signup');
      }

      public function regis(){
        $check=Users::find($request->get('userId'));
        if(empty($check)){
          $users = new Users;
          $users->id=$request->get('userId');
        }else{
          echo '<script language="javascript">';
          echo '</script>';
          echo 'alert("หมายเลขบัตรประจำตัวประชาชนนี้ได้ทำการลงทะเบียนไว้แล้ว");window.location = "../login"';
        }
        if($request->all()){
          $msg = array(
            'required' => 'ไม่ได้กรอก',
            'image' => 'ต้องเป็นไฟล์รูปภาพ jpeg,png,jpg,gif,svg ขนาดไม่เกิน 2MB'
        );
        $rules = array(
                'houseregis' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'certificate' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'pic' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        );
        $validator = Validator($request->all(), $rules, $msg);
        if ($validator->fails()){
          ->withErrors($validator)
          ->with('students', $students);
          return  view('site.regisForm')
        }else{
          $users->prefixName = $request->get('prefixName');
          $users->firstName = $request->get('firstName');
          $users->lastName = $request->get('lastName');
          $users->phone = $request->get('phone');
          $users->school = $request->get('school');
          $users->province_id = $request->get('province_id');
          $users->position_id = $request->get('position_id');
          $users->email = $request->get('email');
          $users->password = $request->get('password');
        }
          
        }
        return View('site.signup');
      }

    public function logout(){
        Session::forget('user');
        return Redirect('admin');
      }
}
