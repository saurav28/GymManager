<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;


class SendReports implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     
     * @return void
     */
    public function handle()
    {
        // 
        try {
        $users = \DB::select('SELECT * from laravel.users where DATEDIFF(end_date,CURRENT_DATE) > 10');
        
        echo "\n before sending mail";

        \Mail::to('newuser@example.com')->send(new \App\Mail\ReminderMail($users));

        echo "\n Mail sent";
    }
    catch (Exception $e){
        echo 'Message: ' . $e->getMessage();
    }
    }
}
