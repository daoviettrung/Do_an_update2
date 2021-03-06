<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TopicController extends Controller{
    public function viewTopic(){
        $topic= Topic::all();
        return view('dashboard.pages.admin.topic.view',['topic'=>$topic]);
    }
    public function getAddTopic(){
        $user=User::all();
        $mod=[];
        $i=0;
        foreach ($user as $u){
            if($u->level==1){
                $mod[$i]=$u->id;
                $i+=1;
            }
        }
        $user1=DB::table('users')->whereIn('id',$mod)->get();
        return view('dashboard.pages.admin.topic.add',['user'=>$user1]);
    }
    public function postAddTopic(Request $request){
        $validator= $request->validate(['name'=>'required|min:2|max:250'],['name.required'=>'Do not leave it blank',
            'name.min'=>'Need to enter 2 or more characters','name.max'=>'The number of characters exceeds the limit']);
        $topic= new Topic;
        $topic1= Topic::all();
        $nameCut=[];
        $i=0;
        $count=DB::table('tbl_topic')->count();
        $mod=DB::table('users')->where('name',$request->mod_id)->get();
        foreach ($mod as $m){
            $m=$m;
        }
        if($count==0){
            $name=$request->name;
            $name= explode(" ",$name);
            foreach ($name as $n){
                $nameCut[$i]=$n[0];
                $i+=1;
            }
            $nameCut=implode("",$nameCut);
            $nameCut=strtoupper($nameCut)."-1";
            $slug=implode("-",$name);

            $topic->id=$nameCut;
            $topic->name=$request->name;
            $topic->slug=$slug;
            $topic->mod_id=$m->id;
            $topic->save();
            return view('dashboard.pages.admin.topic.view',['topic'=>$topic1]);
        }
        else{
            $topicLast = DB::table('tbl_topic')->latest()->first();
            $number =  explode('-', $topicLast->id);
            $number=(int)$number[1]+1;
            $name=$request->name;
            $name= explode(" ",$name);
            foreach ($name as $n){
                $nameCut[$i]=$n[0];
                $i+=1;
            }
            $nameCut=implode("",$nameCut);
            $nameCut=strtoupper($nameCut)."-".$number;
            $slug=implode("-",$name);
            $topic->id=$nameCut;
            $topic->name=$request->name;
            $topic->slug=$slug;
            $topic->mod_id=$m->id;
            $topic->save();
            return view('dashboard.pages.admin.topic.view',['topic'=>$topic1]);
        }
    }
    public function delete($slug){
        $id_cate=[];
        $i=0;
        $idT=DB::table('tbl_topic')->where('slug',$slug)->get();
        foreach ($idT as $t){
            $t=$t;
        }
        $topic = Topic::find($t->id);
        $category=DB::table('tbl_category')->where('topic_id',$topic->id)->get();
        foreach ($category as $ct){
            $id_cate[$i]=$ct->id;
            $i+=1;
        }
        $post=DB::table('tbl_post')->whereIn('category_id',$id_cate)->get();
        foreach ($post as $p){
            $p_delete=Post::find($p->id);
            $p_delete->delete();
        }
        foreach ($category as $c){
            $c_delete=Category::find($c->id);
            $c_delete->delete();
        }
        $topic->delete();
        return $this->viewTopic();
    }
    public function getEdit($slug){
        $user=User::all();

        $idT=DB::table('tbl_topic')->where('slug',$slug)->get();
        foreach ($idT as $t){
            $t=$t;
        }
        return view('dashboard.pages.admin.topic.Edit',['topic'=>$t,'user'=>$user]);
    }
    public function postEdit(Request $request,$slug){
        $validator= $request->validate(['name'=>'required|min:2|max:250'],['name.required'=>'Do not leave it blank',
            'name.min'=>'Need to enter 2 or more characters','name.max'=>'The number of characters exceeds the limit']);
        $idT=DB::table('tbl_topic')->where('slug',$slug)->get();
        foreach ($idT as $t){
            $t=$t;
        }
        $mod=DB::table('users')->where('name',$request->mod_id)->get();
        foreach ($mod as $m){
            $m=$m;
        }
        $name=$request->name;
        $name= explode(" ",$name);
        $slug=implode("-",$name);
        $topic=Topic::find($t->id);
        $topic->name=$request->name;
        $topic->slug=$slug;
        $topic->mod_id=$m->id;
        $topic->save();
        return $this->viewTopic();

    }
}
