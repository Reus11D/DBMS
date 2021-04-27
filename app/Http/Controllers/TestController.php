<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Route;
class TestController extends Controller
{
    public function test(){
        $users=DB::select('select * from Sholpan');
        return view('students', compact('users'));

    }
}
