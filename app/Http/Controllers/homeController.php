<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Models\Detail;
use App\Models\Post;
use App\Models\Like;
class homeController extends Controller
{
    public function index(){
        if(!session()->has('url')){
			return redirect('login');
		}
        
        $results = DB::table('details')
        ->join('post', 'details.id', '=', 'post.u_id')
        ->orderBy('post.post_id', 'desc')
        ->get();

        return view('/htmlFiles/home',['results'=>$results]);
    }

    public static function getData($post_id){
        $u_id = session('id');
        $like_exist = DB::table('likes')
            ->where('u_id',$u_id )
            ->where('post_id',$post_id)
            ->count();

        if($like_exist==1){
            return "hideh";
        }
        return "";
    }
    public static function getData2($post_id){
        $u_id = session('id');
        $like_exist = DB::table('likes')
            ->where('u_id',$u_id )
            ->where('post_id',$post_id)
            ->count();

        if($like_exist!=1){
            return "hideh";
        }
        return "";
    }
    public function likepost(Request $req){
        $post_id = $req->post_id;
        $u_id = session('id');

        // $like = new Like;
        //     $like->u_id = "202";
        //     $like->post_id = $post_id;
        //     $like->save();

        $l = DB::table('post')
            ->where('post_id',$post_id);

        $like_num = $l->value('like_count');

        $like_exist = DB::table('likes')
            ->where('u_id',$u_id )
            ->where('post_id',$post_id)
            ->count();

        if($like_exist!=1){
            $like_num ++; 
            $like = new Like;
            $like->u_id = $u_id;
            $like->post_id = $post_id;
            $like->save();
            $done = 1;
        }
        if($like_exist == 1){
            $like_num --; 
            $delete = DB::table('likes')->where('u_id',$u_id)->where('post_id',$post_id)->delete();
            $done = 0;
        }
        $updatelike = DB::table('post')->where('post_id',$post_id )->update(['like_count' => $like_num]);
        return response()->json($done.",".$like_num);
    }
}
