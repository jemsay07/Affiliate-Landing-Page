<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPagesController extends Controller{
    
	public function index(){
		return view('index');
	}

}
