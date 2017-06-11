<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutus()
    {
        return view('wtf.aboutus');
    }

    /**
    *
    *   Changes for Index
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
        
    public function home (Request $request){
        return view('wtf.home');
    }

    /**
    *
    *   Changes for Index
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
        
    public function articles (Request $request){
        return view('wtf.articles');
    }

    /**
    *
    *   Changes for Index
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
        
    public function events (Request $request){
        return view('wtf.events');
    }

    /**
    *
    *   Changes for Index
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
        
    public function app (Request $request){
        $parameters = $request->all();
        return view('wtf.app');
    }
        
    /**
    *
    *   Changes for Index
    *   Description :   fk you
    *   Last edited by : Firdausneonexxa
    *
    */
        
    public function mcalert (Request $request){

        $parameters = $request->all();
        return view('wtf.mcalert');
    }
                
    /**
    *
    *   Changes for Index
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
        
    public function seenact (Request $request){
        $parameters = $request->all();
        return view('wtf.seeandact');
    }
        
        
}
