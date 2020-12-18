<?php

namespace App\Http\Controllers\Mod;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ModControllers extends Controller
{
    public function accept($id)
    {
        $client= new ClientController();
        $idPost = explode("_", $id);
        if (count($idPost) == 2) {
            foreach ($idPost as $values) {
                if ($values == "UPDATE") {
                    $idPost1 = $idPost[0];
                }
            }
            $post=Post::find($id);//id post update
            $idPost1 = Post::find($idPost1);//id post
            $idPost1->author_id=$post->author_id;
            $idPost1->category_id=$post->category_id;
            $idPost1->title=$post->title;
            $idPost1->slug=$post->slug;
            $idPost1->content=$post->content;
            $idPost1->updated_at=$post->created_at;
            $post->delete();
            $idPost1->save();
            return $this->homeMod();
        }
        else{
            $post = Post::find($id);
            $post->status = "display";
            $post->save();
            return $this->homeMod();
        }
    }
    public function detailPost($slug,$id){
        $accountLogin= DB::table('users')->where('id',$id)->get();
        foreach($accountLogin as $acc){
            $acc=$acc;
        }
        $id_post = Post::where('slug', '=', $slug)->get();
        foreach($id_post as $values){
            $values=$values;
        }
        return view('dashboard.pages.mod.DetailPost',['post'=>$values,'accountLogin'=>$acc]);

    }
    public function homeMod($id=null)
    {
        $accountlogin= DB::table('users')->where('id',$id)->get();
        foreach($accountlogin as $acc){
            $acc=$acc;
        }
        $id_u = [];
        $i = 0;

        $post = DB::table('tbl_post')->where('is_post', '=', 1)->get();
        foreach ($post as $values) {

            $id_u[$i] = $values->author_id;
            $i += 1;
        }
        $user_id = DB::table('users')->whereIn('id', $id_u)->get();
        return view('dashboard.pages.mod.ListPost_approve', ['post' => $post, 'user' => $user_id,'accountLogin'=>$acc]);
    }
    public function postDetailApprove($slug,$idAcc)
    {
        $accountlogin= DB::table('users')->where('id',$idAcc)->get();
        foreach($accountlogin as $acc){
            $acc=$acc;
        }

        $id_post = Post::where('slug', '=', $slug)->get();
        foreach ($id_post as $values) {
            $values = $values;
        }
        return view('dashboard.pages.mod.approve_post', ['idPost' => $values,'accountLogin'=>$acc]);
    }
    public function listPostMod($idMod){
        $category=[];
        $post=[];
        $i=0;
        $j=0;
        $a=0;
        $accountLogin= DB::table('users')->where('id',$idMod)->get();
        foreach($accountLogin as $acc){
            $acc=$acc;
        }
        $idTopic=DB::table('tbl_topic')->where('mod_id',$idMod)->get();
        foreach($idTopic as $values){

            $category[$i]=$values->id;
            $i+=1;
        }
        $idCategory=DB::table('tbl_category')->whereIn('topic_id',$category)->get();
        foreach($idCategory as $values){
            $post[$j]=$values->id;
            $j+=1;
        }
        $postGet=DB::table('tbl_post')->whereIn('category_id',$post)->get();
        return view('dashboard.pages.mod.ListPost',['post'=>$postGet,'accountLogin'=>$acc]);
    }


    public function deletePost($id)
    {
        $post = Post::all();
        $post = $post->find($id);
        $post->delete();
    }

}
