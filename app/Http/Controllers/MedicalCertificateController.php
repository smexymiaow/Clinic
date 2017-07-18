<?php

namespace App\Http\Controllers;

use App\Medical_Certificate;
use Illuminate\Http\Request;
use App;
use Dompdf\Dompdf;
use Auth;
use \App\User;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\pdfship;

class MedicalCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadHTML('<h1>Test</h1>');
        // return $pdf->stream();
        // return view('layouts.drawpad');

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
        $param = $request->all();
        // dd($param);
        $currentdate = Carbon::now();
        $drname = Auth::user()->name;
  // "ptname" => "miche fap"
  // "ptmat" => "19888"
  // "ptprob" => "mental"
  // "mcfrom" => "2017-07-12"
  // "mcto" => "2017-07-18"
        $student =  DB::table('users')->where('matric_id',$param['ptmat'])->first();
        $startmc = Carbon::parse($param['mcfrom']);
        $endmc = Carbon::parse($param['mcto']);
        $mc_how_many_day = $startmc->diffInDays($endmc);

        $mcnew = new Medical_Certificate();
        $mcnew->illness = $param['ptprob'];
        $mcnew->mc_date = $param['mcfrom'];
        $mcnew->mc_day = $mc_how_many_day;
        $mcnew->user_id = $student->id;
        $mcnew->save();        

        $html = '<html>
                <head>
                </head>
                <body style="margin:10px;border:solid black">
                    
                    <table style="width:100%;padding:10px;">
                  <tr>
                    <th colspan="2">MC ID: '.$mcnew->id.'</th>
                    <th>Issuance Date : '.$currentdate->format('F jS\\, Y').'</th>
                  </tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                  <tr>
                    <td colspan="3" class="text-align:justify">This is to certify that '.$param["ptname"].' whose matrix ID is '.$param["ptmat"].' was carefully examines and treated at Klinik Redza, and th patient is suffering from '.$param["ptprob"].'. Therefore, I cosider that a period of absence of duty from <span style="color:blue">'.$startmc->format('F jS\\, Y\\, \\(l\\)').'</span> to <span style="color:blue">'.$endmc->format('F jS\\, Y\\, \\(l\\)').'</span>.</td>
                  </tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                  <tr>
                    <td colspan="2"></td>
                    <td>
                        Verified By,
                    </td>
                  </tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                  <tr>
                    <td colspan="2"></td>
                    <td>
                        .....................
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2"></td>
                    <td>
                        (Dr. '.$drname.')
                    </td>
                  </tr>
                </table>
                    
                </body>
                </html>';

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A5', 'landscape');
        $dompdf->render();
        $output = $dompdf->output();
        $pdfpath = 'pdf/'.$mcnew->id.'.pdf';
        file_put_contents($pdfpath, $output);
        // $dompdf->stream();
        // begin mailing

        $emailtitle = "haha";
        $emailcontent = "haha content";
        $emaildata = collect([$pdfpath, $mcnew->user_id, Auth::user()->email]);
        
        Mail::to($student->email)->send(new pdfship($emaildata));
        // Mail::send('emails.send', ['title' => $emailtitle, 'content' => $emailcontent], function ($message)
        // {

        //     $message->from('firdaushishamuddin@gmail.com', 'Christian Nwamba');

        //     $message->to('qayyummarzalan@gmail.com');
        //     // $message->attach($dompdf);
        //      $message->subject("Hello from Scotch");


        // });

        // return response()->json(['message' => 'Request completed']);
        return back();
        // Mail::to($request->user())->send(new pdfship($order));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medical_Certificate  $medical_Certificate
     * @return \Illuminate\Http\Response
     */
    public function show(Medical_Certificate $medical_Certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medical_Certificate  $medical_Certificate
     * @return \Illuminate\Http\Response
     */
    public function edit(Medical_Certificate $medical_Certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medical_Certificate  $medical_Certificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medical_Certificate $medical_Certificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medical_Certificate  $medical_Certificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medical_Certificate $medical_Certificate)
    {
        //
    }
}
