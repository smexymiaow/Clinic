<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*
    *
    *   Changes for Profile
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
        
    public function profile (Request $request){
        $parameters = $request->all();
        return view('wtf.myprofile');
    }
    	
}
