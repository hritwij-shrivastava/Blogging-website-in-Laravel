<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Models\Detail;
use SweetAlert;

class signupController extends Controller
{
    public function index(){
        if(session()->has('url')){
			return redirect('in/'.session('url'));
		}
		return view('/signup/signup');
    }
    public function store(Request $req){


        if (DB::table('details')->where('email', $req->email)->exists()) {
            alert()->error( 'Email already exists.Try forget password','Oops!')->autoclose(5500)->persistent('Close');
            return back();
         }
         else{
            $detail = new Detail;
            $detail->name = $req->name;
            $detail->email = $req->email;
            $detail->password = $req->psw;
            $detail->bioh1 = "WRITE YOUR BIO HERE";
            $detail->bioh2 = "AND DESCRIBE YOURSELF";
            $detail->mobile = "+91 80********";
            $detail->profilesource = "../images/profile.png";
            $detail->backgroundtheme = "N/A";
            
            
            //$result = DB::table('details')->where('email', $req->email)->where('password',$req->psw);
            //$name = $result->value('name');

            $link = strtolower($req->name);
            $link = str_replace(' ', '-', $link);
            
            if(DB::table('details')->where('url', $link)->exists()){
                $detail->url = $link.rand(1,1000000);
            }
            else{
                $detail->url = $link;
            }

            $detail->save();

            alert()->success( 'Please login to contnue','Registration Successful!')->autoclose(3500);
            return redirect('login');
         }
         


        //dd($req->all());
        //return view('/login/login');
       
        
	}
}
