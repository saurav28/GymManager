<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class ReminderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $users;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $users)
    {
        //

       $this->users = $users;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        Log::info("Building the mailable class");


        return $this->from('mail@example.com', 'Mailtrap')
            ->subject('User Reports')
            ->markdown('emails.reminder')
            ->with([
                'users' => $this->users,
                'link' => 'https://mailtrap.io/inboxes'
            ]);

       // return $this->from('mail@example.com','Mailtrap')->view('emails.reminder');
    }
}
