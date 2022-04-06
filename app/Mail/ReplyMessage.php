<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReplyMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = "Salessa";
        $address = env('MAIL_FROM_ADDRESS');
        $subject = "Thank you for contacting us";
        return $this->view('mail.reply_message')
            ->from($address, $name)
            ->replyTo($address, $name)
            ->subject($subject)
            ->with([
                'name' => $this->message->name,
                'email' => $this->message->email,
                'message' => $this->message->message,
                'reply_title' => $this->message->reply_title,
                'reply_time' => $this->message->reply_time,
                'reply_body' => $this->message->reply_body,
            ]);
    }
}
