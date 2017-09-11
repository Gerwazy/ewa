<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
    	echo 'Hello world!';
    }

    public function add() {
    	return view('home.add');
    }
}
