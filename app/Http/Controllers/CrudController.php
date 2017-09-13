<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'dodaj']);
    }

    public function index() {
    	return view('crud.index');
    }

    public function dodaj() {
    	return view('crud.dodaj');
    }
  
    public function save() {

    }
}
