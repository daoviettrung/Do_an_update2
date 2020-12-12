<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ClientController extends Controller
{
    public function getHome()
    {
        return view('client1.index');
    }

    public function getPost(Request $request)
    {
        $post = (Post::
        where([['slug', '=', $request->slug],
            ['status', '<>', 'approval']
        ])->first());
        if (!$post) {
            return abort(404);
        }
        $comments = Post::
        where([['id', 'like', $post->id . '_%'],
            ['id', '<>', $post->id . '_UPDATE']
        ])->orderBy('id', 'asc')->get();
        return view('client.pages.post', ['post' => $post, 'comments' => $comments]);
    }
    //==================trung=======================================================
    public function listpost($idUser=null)
    {
        if($idUser==null){
            $post = Post::where('status', '=', 'display')->get();
            return view('client.pages.home', ['post' => $post,'user'=>$idUser]);
        }
        else{
            $users = User::all();
            $idUser=$users->find($idUser);
            $firstNameUser=$idUser->name[0];
            $post = Post::where('status', '=', 'display')->get();
            return view('client.pages.home', ['post' => $post,'user'=>$idUser,'firstNameUser'=>$firstNameUser]);
        }
    }
    public function postDetail($slug)
    {
        //Lay ra 1 bai post
        $postDt = Post::where('slug', '=', $slug)->get();
        foreach ($postDt as $value) {
            $id = $value;
        }
        $cmt=DB::table('tbl_post')->where('id','like',$id->id."_%")->get();
        return view('client.pages.post', ['postDt' => $id,'cmt'=>$cmt]);
    }
}
