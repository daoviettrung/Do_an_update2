<?php
namespace App\Http\Controllers\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class MemberController extends Controller{
    public function showProfile($id=null)
    {
        $id = User::find($id);
        return view('dashboard.pages.member.profile.ShowProfile', ['accountLogin' => $id]);
    }
    public function getEditprofile($id){
        $user= User::find($id);
        return view('dashboard.pages.member.profile.EditProfile',['user'=>$user,'accountLogin'=>$user]);
    }

    public function postEditProfile(Request $request,$id){

        $user= User::find($id);
        $user->name= $request->name;
        $user->email=$request->email;
        $user->gender=$request->gender;
        $user->save();
        return $this->showProfile($id);

    }
    public function getEditPassword($id){
        $user=User::find($id);
        return view('dashboard.pages.member.profile.EditPassword',['accountLogin'=>$user]);
    }
    public function postEditPassword(Request $request,$id){
        $user=User::find($id);
        $user->password=Hash::make($request->passwordAgain);
        $user->save();
        return $this->showProfile($id);
    }
}
