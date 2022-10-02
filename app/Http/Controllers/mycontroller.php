<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    function index(){
        return view('folder.home');
    }

    function about(){
        return view('folder.about');
    }

    function contact(){
        return view('folder.contact');
    }

    function services(){
        return view('folder.services');
    }
}
