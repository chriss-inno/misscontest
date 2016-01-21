<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        if(Auth::guest())
        {
            return view('users.login');
        }
    }


     public function index()
     {
         if(Auth::guest())
         {
             return view('users.login');
         }
         else
         {
             return redirect('home');
         }
     }
}
