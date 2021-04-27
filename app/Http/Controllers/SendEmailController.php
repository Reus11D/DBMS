<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\Queries;

class SendEmailController extends Controller
{
    function index(){
        return view('after_sign_in');
    }

    function send(Request $request){
        $this->validate($request, [
            'name'  =>   'required',
            'email'   =>   'required|email',
            'message'  =>  'required'
        ]);
        $data = array(
         'name'  => $request->name,
         'email' => $request->email,
         'message' => $request->message,
         'phone' => $request->phone
        );

        Queries::create([
            'name' => $request->name,
            'email' =>  $request->email,
            'message' =>  $request->message,
        ]);

        Mail::to('abilhayir.abay@gmail.com')->send(new SendMail($data));
        return back()->with('success', 'Thanks for contacting us!');
    }
}
