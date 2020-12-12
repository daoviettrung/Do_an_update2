<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use App\Models\Topic;
use App\Models\Category;
use App\Models\User;

class PostController extends  Controller{
    public function showPost($id){
        $post= Post::all();
        $topic=Topic::all();
        $cate=Category::all();
        $user=User::all();
        $accountLogin= DB::table('users')->where('id',$id)->get();
        foreach($accountLogin as $acc){
            $acc=$acc;
        }
        return view ('dashboard.pages.admin.post.ViewPost',['post'=>$post,'accountLogin'=>$acc,
            'topic'=>$topic,'cate'=>$cate,'poster'=>$user]);

    }

}
