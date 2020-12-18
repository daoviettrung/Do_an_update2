<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Report;

class ReportController extends Controller{
    public function viewReport(){
        $report=Report::all();
        return view('dashboard.pages.admin.report.view',['report'=>$report]);
    }
    public function viewPost($id){

    }
}
