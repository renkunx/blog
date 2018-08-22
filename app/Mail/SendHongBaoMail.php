<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;

class SendHongBaoMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $hongbaoma = 'http://p77n9a5vi.bkt.clouddn.com/IMG_0944.PNG';
        $yuebaohongbao = 'http://p77n9a5vi.bkt.clouddn.com/yuebaohongbao.jpeg';
        return $this->subject("支付宝红包")
                    ->view('mail.hongbao',['hongbaoma' => $hongbaoma,
                    'yuebaohongbao' => $yuebaohongbao]);
    }
}
