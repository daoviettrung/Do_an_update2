<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopicController extends Controller{
    public function viewTopic(){
        return view('dashboard.pages.Admin.topic.view');
    }
}
