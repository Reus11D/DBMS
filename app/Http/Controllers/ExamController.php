<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ExamMail;
use App\Models\Exam;

class ExamController extends Controller
{
    function index(){
        return view('after_sign_in');
    }

    function send(Request $request){
        $this->validate($request, [
            'name'  =>   'required',
            'email'   =>   'required|email',
            'phone'  =>  'required'
        ]);
        $data = array(
         'name'  => $request->name,
         'email' => $request->email,
         'phone' => $request->phone
        );

        Exam::create([
            'name' => $request->name,
            'email' =>  $request->email,
            'phone' =>  $request->phone,
        ]);

        Mail::to('abilhayir.abay@gmail.com')->send(new ExamMail($data));
        return back()->with('success', 'Thanks for contacting us!');
    }
}
