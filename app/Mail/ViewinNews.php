<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ViewinNews extends Mailable
{
    use Queueable, SerializesModels;

    private int $views;
    private string $title;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(int $views, string $title)
    {
        $this->views = $views;
        $this->title = $title;
    }

    public function build()
    {
        return $this->view('mail.send', [
            'views' => $this->views,
            'title' => $this->title,
        ]);
    }
}
