<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Models\Detail;
use SweetAlert;

class validationController extends Controller
{
    public function index(){
		if(session()->has('url')){
			return redirect('in/'.session('url'));
		}
		return view('/login/login');
	}

	public function loginvalidation(Request $req){
		//dd($req->all());
		
		if (DB::table('details')->where('email', $req->email)->where('password',$req->psw)->exists()) {
			//alert()->success('You are logged in successfully','Welcome')->autoclose(2500);
			
			$result = DB::table('details')->where('email', $req->email)->where('password',$req->psw);
			$id = $result->value('id');
			$name = $result->value('name');
			$bioh1 = $result->value('bioh1');
			$bioh2 = $result->value('bioh2');
			$mobile = $result->value('mobile');
			$PROF = $result->value('profilesource');
			$link = $result->value('url');

			$req->session()->put('id', $id);
			$req->session()->put('name', $name);
			$req->session()->put('bioh1', $bioh1);
			$req->session()->put('bioh2', $bioh2);
			$req->session()->put('mobile', $mobile);
			$req->session()->put('PROF', $PROF);
			$req->session()->put('url', $link);
			
			return redirect('in/'.$link);
         }
         else{
			alert()->warning('Email id or password not matched','Oops!')->autoclose(3500)->persistent('Close');
			return back();
		 }
	}
}
