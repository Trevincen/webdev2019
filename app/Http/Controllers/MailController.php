<?php

namespace App\Http\Controllers;

use App\Mail\kirimemail;
use Illuminate\Http\Request;
use App\Mail\MalasngodingEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
	public function index(){
 
		Mail::to("trevincentambunan@gmail.com")->send(new kirimemail());
        
        return "Email has been sent";
		return view('admin');
		
		
	}
	

	
 
}
