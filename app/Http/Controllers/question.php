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
            $answers = Answers::all();
            return View('question.question')
            ->with('questions', $questions)
            ->with('Answers', $Answers);
        }
      }
}
