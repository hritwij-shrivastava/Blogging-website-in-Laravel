<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Models\Detail;

class routeController extends Controller
{
    public function index(Request $req){
        if(!session()->has('url')){
			return redirect('login');
		}
        
        $user_name = $req->user_name;

        if (DB::table('details')->where('url', $user_name)->exists()) {

            if(session('url')==$user_name){
                return view('htmlFiles/profile');
            }
            else{
                return redirect('login');
            }

        }
    }

}
