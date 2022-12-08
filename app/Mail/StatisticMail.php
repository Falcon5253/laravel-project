<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StatisticMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $articleCount;
    protected $commentCount;
    public function __construct($articleCount, $commentCount)
    {
        $this->articleCount=$articleCount;
        $this->commentCount=$commentCount;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(ENV('MAIL_USERNAME'))
                    ->to('mr.sokol5253@gmail.com')
                    ->with([
                        'articleCount'=>$this->articleCount,
                        'commentCount'=>$this->commentCount
                        ])
                    ->view('mail.stat');
    }
}
