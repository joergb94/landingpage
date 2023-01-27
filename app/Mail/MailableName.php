<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;

class MailableName extends Mailable
{
    use Queueable, SerializesModels;
    

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($form)
    {
           $this->form = $form;
           $this->subject ='Send by the website('.Carbon::now().')';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        $data['form']   = $this->form;
        $data['date']= Carbon::now();
         return $this->view('email.template',['data'=>$data])->subject($this->subject);
    }
}
