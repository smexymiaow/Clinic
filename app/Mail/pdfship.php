<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use \App\User;

class pdfship extends Mailable
{
    use Queueable, SerializesModels;

    public $emaildata;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emaildata)
    {
        $this->emaildata = $emaildata;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user = User::find($this->emaildata[1]);
        $address = $this->emaildata[2];
        $name = 'Admin KR';
        $subject = 'Medical Certificate';
        
        
        $email = $this->view('emails.send')
                    ->from($address, $name)
                    ->with([
                        'ptname' => $user->name,
                    ])
                    ->subject($subject)
                    ->attach($this->emaildata[0], array(
                        'as' => 'yourmc.pdf', 
                        'mime' => 'application/pdf')
                    );
        // dd($this->pdfpath);
        return $email;
        // return $this->markdown('layouts.drawpad')
        //             ->attach('/pdf', [
        //                 'as' => 'name.pdf',
        //                 'mime' => 'application/pdf',
        //             ]);
    }
}
