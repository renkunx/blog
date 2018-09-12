<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Spread;

class ThankForContribute extends Mailable
{
    use Queueable, SerializesModels;
    public $spread;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Spread $spread)
    {
        //
        $this->spread = $spread;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $hongbaoma = 'http://p77n9a5vi.bkt.clouddn.com/IMG_0944.PNG';
        return $this->subject("感谢您对".$this->spread->title."社区的贡献")
                    ->view('mail.thankgithub', ['spread'=> $this->spread, 'hongbaoma' => $hongbaoma ]);
    }
}
