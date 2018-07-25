<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class JoinTheTeam extends Mailable
{
    use Queueable, SerializesModels;

    protected $data = [];

    /**
     * JoinTheTeam constructor.
     * @param array $data
     */

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('mail.from.address'))
            ->subject('I want to join the team')
            ->view('emails.join-the-team')
            ->with([
                'name' => $this->data['name'],
                'email' => $this->data['email'],
                'type' => $this->data['type'],
                'reason' => $this->data['reason'],
            ]);
    }
}
