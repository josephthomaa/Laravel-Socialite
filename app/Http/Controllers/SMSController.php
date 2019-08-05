<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo;


class SMSController extends Controller
{
    public function send(){
        Nexmo::message()->send([
            'to'   => '918078194963',
            'from' => 'hahahahaaa',
            'text' => 'This is a Test.'
            ]);
    }
}
