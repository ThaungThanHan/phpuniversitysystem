<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller
{
    public function index(){
        $loggeduser = Auth::user();
        return view('webpage.homepage',compact('loggeduser'));
    }
}
