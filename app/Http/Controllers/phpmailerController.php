<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class phpmailerController extends Controller
{
    
public function mail()
{
   $name = 'Krunal';
   Mail::to('aboo.shade333@gmail.com')->send(new SendMailable($name));
   
   return 'Email was sent';
}


}
