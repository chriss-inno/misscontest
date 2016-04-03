<?php

namespace App\Http\Controllers;

use App\Contestant;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;

class ContestantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contestants=Contestant::all();
        return view('contestants.index',compact('contestants'));
    }

    //getBlog
    public function getBlog()
    {
        $contestants=Contestant::all();
        return view('contestants.blog',compact('contestants'));
    }

    //getReviews

    public function getReviews()
    {
        $contestants=Contestant::all();
        return view('contestants.reviews',compact('contestants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contestants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'profile_img' => 'required|mimes:jpeg,bmp,png',
            'contestant_name' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'email',
            'dob' => 'required|before:18 years ago', // rules
            'before' => 'You must be at least 13 years old' // messages
        ]);

        $contestant=new Contestant;
        $contestant->contestant_name=$request->contestant_name;
        $contestant->gender=$request->gender;
        $contestant->email=$request->email;
        $contestant->phone=$request->phone;
        $contestant->region_id=$request->region;
        $contestant->district_id=$request->district;
        $contestant->city=$request->city;
        $contestant->zone=$request->zone;
        $contestant->registration_date=date("Y-m-d");
        $contestant->profile_note=$request->profile_note;
        $contestant->status="Active";
        $contestant->dob=$request->dob;
        $contestant->contest_year=date("Y");
        $contestant->save();

        //Generate reference number
        $reference_no= $contestant->id.date("Ymi");
        $contestant->reference_no=$reference_no;
        $contestant->save();
        //check if attachment

        $file= $request->file('profile_img');
        $destinationPath = storage_path() .'/images/';
        $filename  =  $contestant->reference_no. '.'.$file->getClientOriginalExtension();

        $file->move($destinationPath, $filename);

        $contestant->profile_image= $filename;
        $contestant->save();

       return redirect('contestant/manage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $contestant=Contestant::find($id);
        return view('contestants.show',compact('contestant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $contestant=Contestant::find($id);
        return view('contestants.edit',compact('contestant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {


            $this->validate($request, [
                'profile_img' => 'required|mimes:jpeg,bmp,png',
                'contestant_name' => 'required',
                'gender' => 'required',
                'phone' => 'required',
                'email' => 'email',
                ['dob' => ['required', 'before:18 years ago']], // rules
                ['before' => 'You must be at least 13 years old'] // messages
            ]);

        $contestant= Contestant::find($request->conte_id);
        $contestant=new Contestant;
        $contestant->contestant_name=$request->contestant_name;
        $contestant->gender=$request->gender;
        $contestant->email=$request->email;
        $contestant->phone=$request->phone;
        $contestant->region_id=$request->region;
        $contestant->district_id=$request->district;
        $contestant->city=$request->city;
        $contestant->zone=$request->zone;
        $contestant->registration_date=date("Y-m-d");
        $contestant->profile_note=$request->profile_note;
        $contestant->status="Active";
        $contestant->dob=$request->dob;
        $contestant->contest_year=date("Y");
        $contestant->save();

        //Generate reference number
        $reference_no= $contestant->id.date("Ymi");
        $contestant->reference_no=$reference_no;
        $contestant->save();
        //check if attachment

        $file= $request->file('profile_img');
        $destinationPath = storage_path() .'/images/';
        $filename  =  $contestant->reference_no. '.'.$file->getClientOriginalExtension();

        $file->move($destinationPath, $filename);

        $contestant->profile_image= $filename;
        $contestant->save();

        return redirect('contestant/manage');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $contestant=Contestant::find($id);
        $contestant->delete();
    }
}
