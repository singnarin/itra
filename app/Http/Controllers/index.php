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

    public function index(){
        return View('site.index');
      }
    
    public function loginForm(){
        return View('site.login');
      }

      public function regis(Request $request){
        if(empty($request->get('userId'))){
          return back()->with('error','กรุณาใส่เลขบัตรประจำตัวประชาชน');
        }else{
          $check=Users::find($request->get('userId'));
        }
        
        if(empty($check)){
          $users = new Users;
          $users->id=$request->get('userId');
        }else{
          echo '<script language="javascript">';
          echo 'alert("หมายเลขบัตรประจำตัวประชาชนนี้ได้ทำการลงทะเบียนไว้แล้ว");window.location = "../login"';
          echo '</script>';
        }

        if($request->all()){
        $msg = array(
          'required' => 'ไม่ได้กรอก',
          'image' => 'ต้องเป็นไฟล์รูปภาพ jpeg,png,jpg,gif,svg ขนาดไม่เกิน 2MB'
        );
        $rules = array(
                'email' => 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                'prefixName' => 'required',
                'firstName' => 'required',
                'lastName' => 'required'
        );
        $validator = Validator($request->all(), $rules, $msg);
        if ($validator->fails()){
          return back()->with('error','ผิดพลาด ใส่ข้อมูลไม่ครบ');
        }else{
          $users->prefixName = $request->get('prefixName');
          $users->firstName = $request->get('firstName');
          $users->lastName = $request->get('lastName');
          $users->phone = $request->get('phone');
          $users->school_id = $request->get('school_id');
          $users->province_id = $request->get('province_id');
          $users->position_id = $request->get('position_id');
          $users->email = $request->get('email');
          if($request->get('password')==$request->get('repeatPassword')){
            $users->password = $request->get('password');
          }else{
            return back()->with('error','password ไม่ตรงกัน');
          }
          
        }
        
          if($users->save()){
            return back()->with('success','ลงทะเบียนเรียบร้อยแล้ว');
          }
      
        }
        return View('site.signup');
      }
    
    
    
    public function login(Request $request){
        $msg = array(
          'required' => ':attribute ต้องกรอก'
        );
        $rules = array(
          'email' => 'required',
          'password' => 'required'
        );
        $validator = Validator($request->all(), $rules, $msg);
        if ($validator->fails()){
          return back()->with('error','ผิดพลาด ใส่ข้อมูลไม่ครบ');
        }else{
          $email = $request->get('email');
          $password = $request->get('password');
          $user = Users::where('email', '=', $email)
            ->where('password', '=', $password)
            ->get();
            if(!empty($user[0])){
              Session::put('user', $user);
              return Redirect('/');
            }else{
              return back()->with('error','email หรือ รหัสผ่านไม่ถูกต้อง');
            }
        }
      }

    public function logout(){
        Session::forget('user');
        return Redirect('/');
      }
}
