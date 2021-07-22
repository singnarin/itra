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

      public function informationForm(){
        $user = Session::get('user');
        if(empty($user)){
          return View('site.login');
        }else{
            return View('user.informationAdd');
        }
      }

      public function information(){
        $user = Session::get('user');
        if(empty($user)){
          return View('site.login');
        }else{
          $positions = Users::find($user[0]->id);
          //echo $positions->position;
          if(!empty($positions->position)){
            return View('user.information')
              ->with('positions', $positions);
          }else{
            return View('user.informationAdd');
          }
        }
      }
      
      public function informationAdd(Request $request){
        $user = Session::get('user');
        if(empty($user)){
          return View('site.login');
        }else{
            $users = Users::find($request->get('id'));
              if($request->all()){
                $msg = array(
                  'required' => 'ไม่ได้กรอก',
                );
                if($user[0]->position_id==1){
                  $rules = array(
                    'position' => 'required',
                    'age' => 'required',
                    'sex' => 'required',
                    'education' => 'required',
                    'work' => 'required',
                    'computer' => 'required'
                  );
                }else{
                  $rules = array(
                    'position' => 'required',
                    'age' => 'required',
                    'sex' => 'required',
                    'education' => 'required',
                    'work' => 'required'
                  );
                }
                $validator = Validator($request->all(), $rules, $msg);
                  if ($validator->fails()){
                    return back()->with('error','ผิดพลาด ใส่ข้อมูลไม่ครบ');
                  }else{
                    $users->position = $request->get('position');
                    $users->age = $request->get('age');
                    $users->sex = $request->get('sex');
                    $users->education = $request->get('education');
                    $users->work = $request->get('work');
                    $users->computer = $request->get('computer');
                  }
                  if($users->save()){
                    return redirect('../information')->with('success','เรียบร้อย'); 
                  }
          }
            return View('user.information')
            ->with('users', $users);
        }
      }
}
