<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Appointment;

class ApiController extends Controller
{
    /*
    *
    *   Changes for Index
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
        
    public function timeselect (Request $request, $datebooking){
        $parameters = $request->all();
        $booktime = DB::table('bookinginfos')->value('time');
        $allbookedtime = Appointment::whereDate('booking_date', '=', $datebooking)->get();
        $alltime = explode(",",$booktime);
        
        foreach ($allbookedtime as $key => $value) {
        	// dd($key,$value->booking_time);
        	$remove = array_search($value->booking_time,$alltime);
        	unset($alltime[$remove]);

        }
        $alltime = (array) $alltime;
        return $alltime;
    }

}
