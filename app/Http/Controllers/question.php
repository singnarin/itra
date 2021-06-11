<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Users;
use App\Questions;
use App\Answers;
use App\Http\Requests;

class question extends Controller
{
    public function question(){
        $user = Session::get('user');
        if(empty($user)){
          return View('site.login');
        }else{
            $questions = Questions::all();
            return View('question.question')
            ->with('questions', $questions);
        }
      }

      public function result(Request $request){
        $user = Session::get('user');
        if(empty($user)){
          return View('site.login');
        }else{
            $userdatas=Users::find(Session::get('user')[0]->id);
            $questions = Questions::all();
            return View('question.result')
            ->with('questions', $questions)
            ->with('userdatas', $userdatas);
        }
      }

      public function editQuestion(Request $request){
        $user = Session::get('user');
        if(empty($user)){
          return View('site.login');
        }else{
          $questions = Questions::find($request->get('id'));
            return View('question.addQuestion')
            ->with('questions', $questions);
        }
      }

      public function addQuestion(Request $request){
        $user = Session::get('user');
        if(empty($user)){
          return View('site.login');
        }else{
            $questions = Questions::find($request->get('id'));
            if(empty($questions)){
              $questions = New Questions;
            }

              if($request->all()){
                $msg = array(
                  'required' => 'ไม่ได้กรอก',
                );
                $rules = array(
                  'no' => 'required',
                  'question' => 'required',
                  'answer1' => 'required',
                  'answer2' => 'required',
                  'answer3' => 'required',
                  'answer4' => 'required',
                  'section_id' => 'required'
                );
                $validator = Validator($request->all(), $rules, $msg);
                  if ($validator->fails()){
                    return back()->with('error','ผิดพลาด ใส่ข้อมูลไม่ครบ');
                  }else{
                    $questions->no = $request->get('no');
                    $questions->question = $request->get('question');
                    $questions->answer1 = $request->get('answer1').'|'.$request->get('score1');
                    $questions->answer2 = $request->get('answer2').'|'.$request->get('score2');
                    $questions->answer3 = $request->get('answer3').'|'.$request->get('score3');
                    $questions->answer4 = $request->get('answer4').'|'.$request->get('score4');
                    $questions->section_id = $request->get('section_id');
                  }
                  if($questions->save()){
                    $questions = Questions::all();
                    return View('question.question')->with('success','เรียบร้อย')->with('questions', $questions);
                  }
          }
            return View('question.addQuestion')
            ->with('questions', $questions);
        }
      }

      public function deleteQuestion(Request $request){
        $user = Session::get('user');
        if(empty($user)){
          return View('site.login');
        }else{
            $questions =  Questions::find($request->get('id'))->delete();
            echo '<script language="javascript">';
            echo 'alert("ลบเรียบร้อย");window.location = "question"';
            echo '</script>';
        }
      }

      public function answer(Request $request){
        $questions = Questions::all();
        $users=Users::find(Session::get('user')[0]->id);
        foreach($questions as $question){
          $score[$question->id] = $request->get($question->id);
        }
        $users->answer = base64_encode(serialize($score)) ;
        if($users->save()){
          return back()->with('success','ระบบบันทึกข้อมูลของท่านเรียบร้อย');
        }
      }
}
