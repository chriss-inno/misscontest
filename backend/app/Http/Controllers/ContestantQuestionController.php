<?php

namespace App\Http\Controllers;

use App\ContestantQuestion;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ContestantQuestionController extends Controller
{
    //
    public function index()
    {
        //
        $questions=ContestantQuestion::all();
        return view('question.index',compact('questions'));
    }

    public function create()
    {
        //
        return view('question.create');
    }

    public function edit($id)
    {
        //
        $question=ContestantQuestion::find($id);
        return view('question.edit',compact('question'));
    }
    public function show($id)
    {
        //
        $question=ContestantQuestion::find($id);
        return view('question.show',compact('question'));
    }

    public function store(Request $request)
    {
        //
        $question=new ContestantQuestion;
        $question->question_title=$request->question_title;
        $question->question_type=$request->question_type;
        $question->status=$request->status;
        if($request->question_type =="Location Based")
        {
            $question->region_id=$request->region;
            $question->district_id=$request->district;
            $question->city=$request->city;
            $question->zone=$request->zone;
        }
        $question->input_by=Auth::user()->username;
        $question->save();
        return "Question Created";
    }

    public function update(Request $request)
    {
        //
        $question=ContestantQuestion::find($request->id);
        $question->question_title=$request->question_title;
        $question->question_type=$request->question_type;
        $question->status=$request->status;
        if($request->question_type =="Location Based")
        {
            $question->region_id=$request->region;
            $question->district_id=$request->district;
            $question->city=$request->city;
            $question->zone=$request->zone;
        }
        $question->input_by=Auth::user()->username;
        $question->save();
        return "Question Updated";
    }

    public function destroy($id)
    {
        //
        $question=ContestantQuestion::find($id);
        foreach($question->answers as $asw)
        {
            $asw->delete();
        }
        $question->delete();
        return redirect('questions/manage');
    }
    
    public function getLocation()
    {
        return view('question.location');
    }
}
