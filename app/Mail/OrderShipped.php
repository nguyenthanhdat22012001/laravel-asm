<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\order;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;
    protected $folder = 'frontend.order.';
    public $order;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(order $order)
    {
        $this->order = $order;
    }

    public function  viewMail(){
      return  $this->view($this->folder."formOrderSuccess");
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->viewMail();
         //$this->view($this->folder."formOrderSuccess");
        // $this->text($this->folder."formOrderSuccess");

         $this->withSwiftMessage(function ($message) {
            $message->getHeaders()->addTextHeader(
                'Custom-Header', 'Xác nhận đơn hàng #'.$this->order
            );
        });

        return $this;
    }
}
