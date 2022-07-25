<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendVerifyMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The mail contents.
     *
     */
    protected $mailContent;
    


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailContent)
    {
        $this->mailContent = $mailContent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('TRADEMYDEAL')->view('emails.send-verified-mail')->with([
            'mailContent' => $this->mailContent
        ]);
    }
}
