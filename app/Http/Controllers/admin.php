<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Users;
use App\Questions;
use App\Questionadmins;
use App\Answers;
use App\Sections;
use App\Http\Requests;

class admin extends Controller
{
    public function report(){
        $user = Session::get('user');
        if(empty($user)){
          return View('site.login');
        }else{
          $questions = Questions::all();
          $users = Users::where('position_id', '=', 1 )
          ->where('status', '=', 'OK' )
          ->get();
            return View('admin.report')
            ->with('questions', $questions)
            ->with('users', $users);
        }
      }

      public function user(){
        $user = Session::get('user');
        if(empty($user)){
          return View('site.login');
        }else{
          $users = Users::where('position_id', '!=', 3 )->get();
            return View('admin.user')
            ->with('users', $users);
        }
      }

      public function resultUser(Request $request, $id){
        $user = Session::get('user');
        if(empty($user)){
          return View('site.login');
        }else{
            $userdatas=Users::find($id);
            $questions = Questions::all();
            $sections = Sections::all();
            return View('question.result')
            ->with('questions', $questions)
            ->with('sections', $sections)
            ->with('userdatas', $userdatas);
        }
      }

      public function reportadmin(){
        $user = Session::get('user');
        if(empty($user)){
          return View('site.login');
        }else{
          $questions = Questionadmins::all();
          $users = Users::where('position_id', '=', 2 )
          ->where('status', '=', 'OK' )
          ->get();
            return View('admin.reportadmin')
            ->with('questions', $questions)
            ->with('users', $users);
        }
      }

      public function informationUser(Request $request){
        $user = Session::get('user');
        if(empty($user)){
          return View('site.login');
        }else{
            $users=Users::find($request->get('id'));
            $sections = Sections::all();
            $questions = Questions::all();
            $sections_arr = Sections::all()->toArray();
            $sections_arr = array_column($sections_arr, 'id');
            return View('admin.informationUser')
            ->with('sections_arr', json_encode($sections_arr,JSON_NUMERIC_CHECK))
            ->with('users', $users)
            ->with('questions', $questions)
            ->with('sections', $sections);
        }
      }
}
