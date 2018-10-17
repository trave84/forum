<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Question;
// use App\Answer;

class QuestionController extends Controller
{
    //
    public function index(){
        // $questions = DB::table('questions')
        //     ->orderBy('created_at', 'asc')
        //     ->get();

        // dd($questions);

        $questions = \App\Questions::orderBy('created_at', 'asc')
            ->get();

        // dd($questions);
        return 'This is the list of questions';
    }

    public function show(){
        // $question = DB::table('questions')
        //     ->where('id', 1)
        //     ->first();

        $question1 = \App\Questions::find(1);

        // dd($question1);

        // $answers = DB:table('answers')
            // ->where('questions_id', 1)
            // ->orderBY('created_at', 'asc')
            // ->get();

        // db(answers);
        // $answers = \App\Answers::Answers()->get();

        $question = \App\Question::find(1);
        return 'This is a detail of a question';
    }
}
