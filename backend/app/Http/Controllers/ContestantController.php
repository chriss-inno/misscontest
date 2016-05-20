<?php

namespace App\Http\Controllers;

use App\Contest;
use App\Contestant;
use App\ContestantGallery;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
        $contestDefault=Contest::where('default','=','Yes')->get()->first();

        $contestant=new Contestant;
        $contestant->full_name=$request->full_name;
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
        if(count($contestDefault)>0 && $contestDefault != null && $contestDefault != "")
        {
            $contestant->contest_id=$contestDefault->id;
        }
        $contestant->save();


        if($request->uploadedFileName !="")
        {
            $newfile = config('app.contestant_image_profile').$request->uploadedFileName;
            $oldfile = config('app.contestant_image_profile_tmp').$request->uploadedFileName;

            if(! File::exists($newfile)) {
                File::move($oldfile, $newfile);
                $contestant->profile_image=$request->uploadedFileName;
                $contestant->save();

                //Copy to front folder
                $file_namenw=config('app.contestant_front_image_profile').$request->uploadedFileName;
                File::copy($newfile,$file_namenw);
            }
            else
            {
                File::delete($newfile);
                File::move($oldfile, $newfile);
                $contestant->profile_image=$request->uploadedFileName;
                $contestant->save();

                //Copy to front folder
                $file_namenw=config('app.contestant_front_image_profile').$request->uploadedFileName;
                File::copy($newfile,$file_namenw);
            }
        }

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
        //
        $contestDefault=Contest::where('default','=','Yes')->get()->first();

        $contestant= Contestant::find($request->id);
        $contestant->full_name=$request->full_name;
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
        if(count($contestDefault)>0 && $contestDefault != null && $contestDefault != "")
        {
            $contestant->contest_id=$contestDefault->id;
        }
        $contestant->save();

        if($request->uploadedFileName !="")
        {
            $newfile = config('app.contestant_image_profile').$request->uploadedFileName;
            $oldfile = config('app.contestant_image_profile_tmp').$request->uploadedFileName;

            if(! File::exists($newfile)) {
                File::move($oldfile, $newfile);
                $contestant->profile_image=$request->uploadedFileName;
                $contestant->save();

                ///
                //Copy to front folder
                $file_namenw=config('app.contestant_front_image_profile').$request->uploadedFileName;
                File::copy($newfile,$file_namenw);
            }
            else
            {
                $contestant->profile_image=$request->uploadedFileName;
                $contestant->save();

                //Copy to front folder
                $file_namenw=config('app.contestant_front_image_profile').$request->uploadedFileName;
                File::copy($newfile,$file_namenw);
            }
        }

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
        if($contestant->photos != null && count($contestant->photos)>0)
        {
            foreach ($contestant->photos as $galley)
            {

                // Delete a single file
                $admin_galley_path=config('app.contestant_image_galley');
                $front_galley_path=config('app.contestant_front_image_galley');
                $destinationPath = $admin_galley_path;
                $filename=$destinationPath.$galley->gallery_path;
                $filename2=$front_galley_path.$galley->gallery_path;

                File::delete($filename);
                File::delete($filename2);

                $galley->delete();

            }
        }
        $admin_profile_img=config('app.contestant_image_profile').$contestant->profile_image;
        $front_profile_img=config('app.contestant_front_image_profile').$contestant->profile_image;
        File::delete($admin_profile_img);
        File::delete($front_profile_img);
        $contestant->delete();
    }

    public function uploadImage(Request $request)
    {
        $input = array('ImageBrowse' => $request->file('ImageBrowse'));
        $rules = array(
            'ImageBrowse' => 'required'
        );
        $validator = Validator::make($input, $rules);
        if ($validator->fails())
        {
           return "";
        }
        else
        {
            $file= $request->file('ImageBrowse');
            $tmp_image_path=config('app.contestant_image_profile_tmp');

            $destinationPath = $tmp_image_path;
            $filename   =date("YmdHis") .'_'.$file->getClientOriginalName();
            $fullFile=$destinationPath.$filename;
                if(! File::exists($fullFile)) {
                    $file->move($destinationPath, $filename);
                    return $filename;

                }
               else
               {
                   return "";
               }

        }
    }

    public function getUploadImage($fileuploaded)
    {
        $filename=$fileuploaded;
        return view('contestants.tempimage',compact('filename'));
    }

    public function uploadContestantImage(Request $request)
    {
        $input = array('ImageBrowse' => $request->file('ImageBrowse'));
        $rules = array(
            'ImageBrowse' => 'required'
        );
        $validator = Validator::make($input, $rules);
        if ($validator->fails())
        {
            return "";
        }
        else
        {

            $files= $request->file('ImageBrowse');
            $file_count = count($files);
            // start count how many uploaded
            $uploadcount = 0;
            foreach($files as $file) {
                $rules = array('file' => 'required|mimes:png,gif,jpeg,jpg'); //
                $validator = Validator::make(array('file'=> $file), $rules);

                if($validator->passes()){
                    $admin_galley_path=config('app.contestant_image_galley');
                    $front_galley_path=config('app.contestant_front_image_galley');

                    $destinationPath = $admin_galley_path;
                    $filename =$request->contestant_id."_". date("YmdHis") .'_'.$file->getClientOriginalName();
                    $upload_success = $file->move($destinationPath, $filename);
                    $uploadcount ++;

                    //Copy to front folder
                    $file_namecp=$admin_galley_path.$filename;
                    $file_namenw=$front_galley_path.$filename;
                    File::copy($file_namecp,$file_namenw);

                    $cg=new ContestantGallery;
                    $cg->contestant_id=$request->contestant_id;
                    $cg->gallery_path=$filename;
                    $cg->created_by=Auth::user()->username;
                    $cg->save();

                }
            }
            if($uploadcount == $file_count){
               $view="";
                $contestant=Contestant::find($request->contestant_id);
               return view('contestants.listimages',compact('contestant'));

            }
            else
            {
                return "";
            }
        }
    }

    public function removeContestantImage($id)
    {
        $cg=ContestantGallery::find($id);
        if($cg != null && count($cg) >0)
        {
            $contestant=Contestant::find($cg->contestant_id);

            // Delete a single file
            $admin_galley_path=config('app.contestant_image_galley');
            $front_galley_path=config('app.contestant_front_image_galley');
            $destinationPath = $admin_galley_path;
            $filename=$destinationPath.$cg->gallery_path;
            $filename2=$front_galley_path.$cg->gallery_path;
            $cg->delete();
            File::delete($filename);
            File::delete($filename2);
            return view('contestants.listimages',compact('contestant'));
        }
    }


}
