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

    public function index_2(){
      return View('site.index_2');
    }
    
    public function loginForm(){
        return View('site.login');
      }

      public function regis(Request $request){
        if(empty($request->get('email'))){
          return back()->with('error','กรุณาใส่ Email');
        }else{
          $check=Users::find($request->get('email'));
        }
        
        if(empty($check)){
          $users = new Users;
          $users->id=$request->get('email');
        }else{
          echo '<script language="javascript">';
          echo 'alert("Email นี้ได้ทำการลงทะเบียนไว้แล้ว");window.location = "../loginForm"';
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
          $users->age = $request->get('age');
          $users->sex = $request->get('sex');
          $users->education = $request->get('education');
          $users->school_id = $request->get('school_id');
          $users->position = $request->get('position');
          $users->password = $request->get('password');
          /*
          if($request->get('password')==$request->get('repeatPassword')){
            $users->password = $request->get('password');
          }else{
            return back()->with('error','password ไม่ตรงกัน');
          }
          */
          
        }
        
          if($users->save()){
            return Redirect('../loginForm')->with('success','ลงทะเบียนเรียบร้อยแล้ว');
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
          $user = Users::where('id', '=', $email)
            ->where('password', '=', $password)
            ->get();
            if(!empty($user[0])){
              Session::put('user', $user);
              if(empty($user[0]->position_id)){
                return Redirect('index_2');
              }else if($user[0]->position_id==1){
                return Redirect('question');
              }else if($user[0]->position_id==2){
                return Redirect('questionadmin');
              }else if($user[0]->position_id==3){
                return Redirect('report');
              }else{
                return back()->with('error','ผิดพลาด');
              }
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
