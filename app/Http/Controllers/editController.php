<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class editController extends Controller
{
    public function index($post_id){
        if(!session()->has('url')){
			return redirect('login');
		}
        

        $p = DB::table('post')
        ->where('post_id',$post_id);
    
        $post_url = $p->value('post_url');
        //echo url("/{$post_id}/{$post_url}");
    
        //return response("/{$post_id}/{$post_url}")->view('/htmlFiles/profile');
    
        $result = DB::table('post')->where('post_id',$post_id);
    
        $u_id = $result->value('u_id');
        $result2 = DB::table('details')->where('id',$u_id);
        
        return view('htmlFiles/blog',['result'=>$result,'result2'=>$result2]);
    
       }
}
