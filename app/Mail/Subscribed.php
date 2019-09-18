<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Subscribed extends Mailable
{
    use Queueable, SerializesModels;

    public $demo;
    public $token_id;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($demo, $token_id)
    {
       $this->demo  = $demo;
       $this->token_id = $token_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('newsletter@9scroob.in')
                    ->subject('welcome to 9scroob')
                    ->view('mails.demo')
                    ->text('mails.demo_plain')
                    ->with([
                        'testVarOne' => '1',
                        'testVarTwo' => '2',
                        'demo' => $this->demo,
                        'token_id' => $this->token_id
                    ]);
        
    }
}
