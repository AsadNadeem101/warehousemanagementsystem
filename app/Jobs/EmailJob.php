<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;
use App\User;
class EmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public $message;
    public $subject;
    public $name;
    public $email;


    public function __construct($message,$subject,$name,$email)
    {
        $this->message=$message;
        $this->subject=$subject;    
        $this->name=$name;
        $this->email=$email;
                  
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $to_name =$this->name;
        $to_email = $this->email;
        
        $data = array('name'=>'warehousemanagement07', "body" => $this->message);
    
        Mail::send('email_template', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                    ->subject($this->subject);
            $message->from('warehousemanagement07@gmail.com');
        }); 
    
    }
}
