<?php

namespace App\Mail;

use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $comment=[];
    public function __construct($comment)
    {
        $this->comment=$comment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        $address = 'ignore@example.com';
        $nameme = 'Ignore Me';
        $subject = 'MailController';
    
        return $this->view('mail')
                    ->from($address, $nameme)
                    
                    ->subject($subject)
                    ->with('comment',$this->comment);


    }
}
