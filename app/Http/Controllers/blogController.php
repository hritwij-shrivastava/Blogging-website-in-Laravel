<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Models\Detail;
use App\Models\Post;
use App\Models\Like;

use Illuminate\Support\Facades\URL;

class blogController extends Controller
{
   public function index($post_id){

    $p = DB::table('post')
    ->where('post_id',$post_id);

    $post_url = $p->value('post_url');

    return redirect("blog/{$post_id}/{$post_url}");
    //echo url("/{$post_id}/{$post_url}");

    //return response("/{$post_id}/{$post_url}")->view('/htmlFiles/profile');


   }

   public function viewBlog(Request $req){

    $post_id = $req->post_id;
    $result = DB::table('post')->where('post_id',$post_id);

    $u_id = $result->value('u_id');
    $result2 = DB::table('details')->where('id',$u_id);
    
    return view('htmlFiles/blog',['result'=>$result,'result2'=>$result2]);
   }

}
