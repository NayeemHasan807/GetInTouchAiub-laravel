<?php

namespace App\Http\Controllers;
//use app\Models;
use App\Models\AdminModel;
use App\Models\AdminPostModel;
use App\Models\PostModel;
//use App\Models\AdminModel;
use Illuminate\Http\Request;

class adminControllerad extends Controller
{
    public function Viewhomead(){
      $pst= PostModel::all();
      $adminpst=AdminPostModel::all();
      //print_r($adminpst);
      //print_r($pst);
        return view('Admin.AdminHome')->with ('post',$pst)
                                    ->with ('adminpost',$adminpst);
    }
    public function Viewpostad(){
        return view('Admin.Post');
    }
    public function deletegupostad($id){
        $post=PostModel::find($id)->delete();
        
        return redirect('Admin/'); 
    }
    public function Viewinsertad(){
        return view('Admin.Insert');
    }
    public function ViewPendingpostad(){
        return view('Admin.penPostReq');
    }
    public function ViewPendingSignupReqad(){
        return view('Admin.penSignupreq');
    }
    public function ViewAdminlistad(){
        return view('Admin.Adminlist');
    }
    public function ViewACListad(){
        return view('Admin.AClist');
    }
    public function ViewCCListad(){
        return view('Admin.CClist');
    }
    public function ViewUserlistad(){
        return view('Admin.GUlist');
    }
    public function ViewBlockListad(){
        return view('Admin.Blocklist');
    }
    public function ViewProfilead(){
        return view('Admin.AdProfile');
    }
    public function ViewNotificationad(){
        return view('Admin.Mynotification');
    }
    public function ViewReportad(){
        return view('Admin.Report');
    }
    public function VieweditProfilead(){
        return view('Admin.EditPro');
    }
}