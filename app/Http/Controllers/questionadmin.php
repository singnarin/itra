<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Users;
use App\Questionadmins;
use App\Answers;
use App\Http\Requests;

class questionadmin extends Controller
{
    public function question(){
        $user = Session::get('user');
        if(empty($user)){
          return View('site.login');
        }else{
            $questions = Questionadmins::all();
            return View('question.questionadmin')
            ->with('questions', $questions);
        }
      }

      public function editQuestion(Request $request){
        $user = Session::get('user');
        if(empty($user)){
          return View('site.login');
        }else{
          $questions = Questionadmins::find($request->get('id'));
            return View('question.addQuestionadmin')
            ->with('questions', $questions);
        }
      }

      public function addQuestion(Request $request){
        $user = Session::get('user');
        if(empty($user)){
          return View('site.login');
        }else{
            $questions = Questionadmins::find($request->get('id'));
            if(empty($questions)){
              $questions = New Questionadmins;
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
                    $questions = Questionadmins::all();
                    return View('question.questionadmin')->with('success','เรียบร้อย')->with('questions', $questions);
                  }
          }
            return View('question.addQuestionadmin')
            ->with('questions', $questions);
        }
      }

      public function deleteQuestion(Request $request){
        $user = Session::get('user');
        if(empty($user)){
          return View('site.login');
        }else{
            $questions =  Questionadmins::find($request->get('id'))->delete();
            echo '<script language="javascript">';
            echo 'alert("ลบเรียบร้อย");window.location = "questionadmin"';
            echo '</script>';
        }
      }

      public function answer(Request $request){
        $questions = Questionadmins::all();
        $users=Users::find(Session::get('user')[0]->id);
        $score='';
        foreach($questions as $question){
          $score = $score.$request->get($question->id).',';
        }
        $users->answeradmin = $score ;
        if($users->save()){
          return back()->with('success','ระบบบันทึกข้อมูลของท่านเรียบร้อย');
        }
      }
}
