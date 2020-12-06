<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class themeController extends Controller
{
    public function index(){
        if(!session()->has('url')){
			return redirect('login');
		}
        
        return view('htmlFiles/theme');
    }
}
