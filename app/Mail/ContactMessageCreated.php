<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use App\Models\Message;
use Illuminate\Queue\SerializesModels;

class ContactMessageCreated extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $sms;

    public function __construct(Message $sms)
    {
        // affectation des valeurs
        $this->sms = $sms;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->sms->email, $this->sms->nom)
                    ->markdown('emails.meassages.created');
    }
}
