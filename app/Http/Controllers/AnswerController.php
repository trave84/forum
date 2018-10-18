<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;  //as Answer {object}

class AnswerController extends Controller
{
    public function show()
    {
        $answer = Answer::find(1);

        return view('answers/show', compact('answer'));
    }

    public function vote()
    {
        $request = request();
 
        $answer = Answer::find(1);
        
        $vote = new \App\Vote;          //
        $vote->answer_id = $answer->id;
        
        if ($request->input('up')) {
            $vote->vote = 1;
            $answer->rating++; 
        } elseif($request->input('down')) {
            $vote->vote = -1;
            $answer->rating--; 
        }
        
        $vote->save();      //INSERT
        $answer->save();    // UPDATE
        
        return back();      //SHORTCUT: REDIRECT TO PREVIOUS PAGE
    }
}
