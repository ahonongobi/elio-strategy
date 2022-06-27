<?php

namespace App\Http\Controllers;

use App\Mail\Brochure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ActionCOntroller extends Controller
{
    public function subscribe(Request $request){
           if (isset($_POST['email'])) {
            $email = $request->email;

            $message ="Bonjour, vous avez demandé à avoir une brochure de ma part de elio strategy";
            $mailable = new Brochure("Brochure",$request->email,$message);
            Mail::to($email )->send($mailable);
            
            return view('sucess');
           } else {
            return back();
           }
           
    }
}
