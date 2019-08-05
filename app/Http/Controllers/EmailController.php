<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Jobs\SendEmailJob;

class EmailController extends Controller
{
    //
    public function sendEmail(){
        
        $emailJob = (new SendEmailJob())->delay(Carbon::now()->addSeconds(3));
        dispatch($emailJob);

        echo 'Hello Test';
    }
}
