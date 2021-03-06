<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Users;
use App\Questions;
use App\Answers;
use App\Sections;
use App\Http\Requests;

class question extends Controller
{
    public function question(Request $request){
        $user = Session::get('user');
        if(empty($user)){
          return View('site.login');
        }else{
          if(!empty($request->get('email'))){
            $users=Users::find($request->get('email'));
            $users->position_id = $request->get('position_id');
            $users->save();
            Session::forget('user');
            $user = Users::where('id', '=', $request->get('email'))->get();
            Session::put('user', $user);
            $user = Session::get('user');
          }
            $questions = Questions::all();
            $sections = Sections::all();
            $userdatas=Users::find(Session::get('user')[0]->id);
            return View('question.question')
            ->with('questions', $questions)
            ->with('sections', $sections)
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
                    return redirect('../addQuestion')->with('success','เรียบร้อย'); 
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
        $users->status = 'OK';
        if($users->save()){
          return back()->with('success','ระบบบันทึกข้อมูลของท่านเรียบร้อย');
        }
      }

      public function result(Request $request){
        $user = Session::get('user');
        if(empty($user)){
          return View('site.login');
        }else{
            $userdatas=Users::find(Session::get('user')[0]->id);
            $questions = Questions::all();
            $sections = Sections::all();
            return View('question.result')
            ->with('questions', $questions)
            ->with('sections', $sections)
            ->with('userdatas', $userdatas);
        }
      }

      public function resultchart(Request $request){
        $user = Session::get('user');
        if(empty($user)){
          return View('site.login');
        }else{
            $userdatas=Users::find(Session::get('user')[0]->id);
            $questions = Questions::all();
            $sections = Sections::all()->toArray();
            $section = Sections::all();
            $sections = array_column($sections, 'id');
            return View('question.resultchart')
            ->with('questions', $questions)
            ->with('sections', json_encode($sections,JSON_NUMERIC_CHECK))
            ->with('section', $section)
            ->with('userdatas', $userdatas);
        }
      }

      public function resultquestion(Request $request, $id){
        $user = Session::get('user');
        if(empty($user)){
          return View('site.login');
        }else{
            $questions = Questions::where('section_id', '=', $id)->get();
            $userdatas=Users::find(Session::get('user')[0]->id);
            return View('question.resultquestion')
            ->with('questions', $questions)
            ->with('userdatas', $userdatas);
        }
      }

  public function confidential(){
    $user = Session::get('user');
    if(empty($user)){
      return View('site.login');
    }else{
        $questions = Questions::where('section_id', '=', '1')->get();
        $sections = Sections::all();
        $userdatas=Users::find(Session::get('user')[0]->id);
        return View('question.confidential')
        ->with('questions', $questions)
        ->with('sections', $sections)
        ->with('userdatas', $userdatas);
    }
  }
  public function integrity(){
    $user = Session::get('user');
    if(empty($user)){
      return View('site.login');
    }else{
        $questions = Questions::where('section_id', '=', '2')->get();
        $sections = Sections::all();
        $userdatas=Users::find(Session::get('user')[0]->id);
        return View('question.confidential')
        ->with('questions', $questions)
        ->with('sections', $sections)
        ->with('userdatas', $userdatas);
    }
  }
  public function availability(){
    $user = Session::get('user');
    if(empty($user)){
      return View('site.login');
    }else{
        $questions = Questions::where('section_id', '=', '3')->get();
        $sections = Sections::all();
        $userdatas=Users::find(Session::get('user')[0]->id);
        return View('question.confidential')
        ->with('questions', $questions)
        ->with('sections', $sections)
        ->with('userdatas', $userdatas);
    }
  }

}
