<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PromotionalMailOTPVerification extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * The mail otp.
     *
     */
    protected $otp;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($otp)
    {
        $this->otp = $otp;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('OTP received via TRADEMYDEAL')->view('emails.promotional-otp-mail')->with([
            'otp' => $this->otp
        ]);
    }
}
