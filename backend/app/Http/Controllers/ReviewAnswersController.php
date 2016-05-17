<?php

namespace App\Http\Controllers;

use App\ReviewAnswers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReviewAnswersController extends Controller
{
    //
    public function index()
    {
        //
        $answers=ReviewAnswers::all();
        return view('question.answers.index',compact('answers'));
    }

    //getAnswers
    public function getAnswers($id)
    {
        $answers=ReviewAnswers::where("question_id","=",$id)->get();
        return view('question.answers.index',compact('answers'));
    }
    public function create()
    {
        //
        return view('question.answers.create');
    }

    public function edit($id)
    {
        //
        $answer=ReviewAnswers::find($id);
        return view('question.answers.edit',compact('answer'));
    }
    public function show($id)
    {
        //
        $answer=ReviewAnswers::find($id);
        return view('question.answers.show',compact('answer'));
    }

    public function store(Request $request)
    {
        //
        $answer=new ReviewAnswers;
        $answer->answer=$request->answer;
        $answer->question_id=$request->question_id;
        $answer->status=$request->status;
        $answer->input_by=Auth::user()->username;
        $answer->save();
        return "Question Created";
    }

    public function update(Request $request)
    {
        //
        $answer=ReviewAnswers::find($request->id);
        $answer->answer=$request->question_title;
        $answer->question_id=$request->question_type;
        $answer->status=$request->status;
        $answer->input_by=Auth::user()->username;
        $answer->save();
        return "Question Updated";
    }

    public function destroy($id)
    {
        //
        $answer=ReviewAnswers::find($id);
        $answer->delete();
        return redirect('questions/manage');
    }
}
