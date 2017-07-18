<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $parameters = $request->all();
        $appointment = new Appointment;
        $date = Carbon::parse($parameters['booking_date']);
        $booking_date = Carbon::createFromDate($date->year,$date->month,$date->day);

        $appointment->booking_date      = $booking_date->toDateTimeString();
        $appointment->booking_time      = $parameters['booking_time'];
        $appointment->booking_symptom   = $parameters['booking_symptom'];
        $appointment->user_id           = Auth::user()->id;

        $appointment->save();

        $sessions = new Session;
        $sessions->approval = 0;
        $sessions->appointment_id = $appointment->id;
        $sessions->save();
        return redirect()->route('app');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy($appointment)
    {
        $appointment = Appointment::find($appointment);
        $appointment->delete();
        return back();
    }
}
