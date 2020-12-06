<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Models\Detail;
use App\Models\Post;
use App\Models\Like;
//use Symfony\Component\HttpFoundation\Request;

class postController extends Controller
{
    public function index(){
        if(!session()->has('url')){
			return redirect('login');
		}
        
        $u_id = session('id');
        $all_post = DB::table('post')->where('u_id',$u_id)->orderBy('post_id','desc')->get();

        return view('/htmlFiles/post',['results'=>$all_post]);
    }
    public function delete(Request $req){
        $post_id = $req->post_id;
        $delete = DB::table('post')->where('post_id',$post_id)->delete();
    }
}
