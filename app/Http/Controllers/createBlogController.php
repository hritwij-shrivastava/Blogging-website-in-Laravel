<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Models\Detail;

class createBlogController extends Controller
{
    public function index(){
        if(!session()->has('url')){
			return redirect('login');
		}
        
        
        $result = DB::table('post')->get();

        $id=0;
        foreach($result as $row){

            $id = $row->post_id;
        }
        $post_id = $id + 1;

        $u_id = session('id');
        $post = new Post;
        $post->post_id = $post_id;
        $post->u_id = $u_id;
        $post->post_title = "(Untitled)";
        $post->post_content = "";
        $post->status = 0;
        $post->like_count = 0;
        $post->theme = 0;
        $post->user_ip = "";
        $post->post_view = 0; 

        $post->post_url = "untitled".rand(1000,100000000);
        $post->save();

        session()->put('post_id',$post_id);
        $result2 = DB::table('post')->where('post_id',$post_id);

        $result3 = DB::table('details')->where('id',$u_id);

        return redirect('create/'.$post_id);
        //view('htmlFiles/createblog',['post_id',$post_id,'result'=>$result2,'result2'=>$result3]);
    }
    public function edit(Request $req){

        $post_id = $req->post_id;
        $u_id = session('id');
        $result2 = DB::table('post')->where('post_id',$post_id);
        $result3 = DB::table('details')->where('id',$u_id);

        return view('htmlFiles/createblog',['post_id',$post_id,'result'=>$result2,'result2'=>$result3]);
    }
    public function upload(Request $req){

        $post_id = session('post_id');
        $title = $req->title;
        $div = $req->div;
        $status = $req->status;

        if($title==''){
            $title='(Untitled)';
        }
        if($div==''){
            $div=" ";
        }



        $reg = DB::table('post')->where('post_id',$post_id )->update(['post_title' => $title,'post_content' =>$div,'status'=>$status]);

        if($title!=''){
            $post_url = str_replace(' ', '-', $title);
        }
        $reg2 = DB::table('post')->where('post_id',$post_id )->update(['post_url' => $post_url]);
        $response1 = '<script> console.log("postid=") ;</script>';
        $response2 = '<script> console.log("'.$post_id.'") ;</script>';
        return response()->json();

    }
}
