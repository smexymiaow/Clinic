<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\Appointment;
use \App\Session as ss;
use \App\User;
use DB;
use Carbon\Carbon;
use \App\Medical_Certificate;

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
        $client_app_det = [];
        if (Auth::user()->is_admin == 1) {
            $isadmin = true;
            // appointment tab
            $unapprovedapp = DB::table('sessions')
            ->leftJoin('appointments', 'sessions.appointment_id', '=', 'appointments.id')
            ->select('sessions.id as sesi_id','sessions.approval as sesi_app','appointments.*')
            // ->where('sessions.approval',0)
            ->get();
            // mc tab
            $listofmc = Medical_Certificate::all(); //paginate(10);
            // dd($listofmc,$unapprovedapp);
            return view('wtf.myprofile',compact('isadmin','unapprovedapp','listofmc'));
        }else{
            $isadmin = false;
            // appointment tab
            $has_appointment = Appointment::where('user_id',Auth::user()->id)->first();

            // mctab
            $listofmc = Medical_Certificate::where('user_id',Auth::user()->id)->get();
            if ($has_appointment==NULL) {
                $has_approved = NULL;
                return view('wtf.myprofile',compact('isadmin','has_appointment','has_approved','listofmc'));
            }else{
                $has_approved = $has_appointment->sesi->approval;
                if ($has_approved==NULL) {
                    $client_app_det = NULL;
                }else{
                    // formatting date
                    $rawdate = Carbon::parse($has_appointment->booking_date);
                    $appoint_date = $rawdate->format('F jS\\, Y\\, l');
                    // end formatting date

                    $client_app_det['Date'] = $appoint_date;
                    $client_app_det['Time'] = $has_appointment->booking_time;
                    
                }
                return view('wtf.myprofile',compact('isadmin','has_appointment','has_approved','client_app_det','listofmc'));
            }
        }

    }
    	
}
