<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
    	return view('home');
    }
    public function program () {
    	return view('program');
    }

    public function events () {
    	return view('events');
    }

    public function about () {
    	return view('about');
    }

}
