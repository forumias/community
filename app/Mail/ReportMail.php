<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReportMail extends Mailable
{
    use Queueable, SerializesModels;
	public $user;
	public $passwordforemail;
	public $mailLink;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$passwordforemail)
    {
        $this->user = $user;
        $this->mailLink = $passwordforemail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.report')->subject('Report mail for post');
    }
}
