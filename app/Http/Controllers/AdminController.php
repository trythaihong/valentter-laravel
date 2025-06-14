<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use App\Models\About;
use App\Models\Offer;
class AdminController extends Controller
{
    public function show_user(){
        $data=user::all();
        return view('admin.show_user',compact('data'));
    }
    public function delete_user($id){
        $data=user::find($id);
        $data->delete();
        return \redirect()->back();
    }
    public function update_user($id){
        $data=user::find($id);
        return view('admin.update_user',compact('data'));
    }
    public function edit_user(Request $request,$id){
        $data=user::find($id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->usertype=$request->usertype;
        $data->save();
        return \redirect()->back();
    }
    public function show_contact(){
        $data=contact::all();
        
        return view('admin.show_contact',compact('data'));
    }
    public function delete_message($id){
        $data=contact::find($id);
        $data->delete();
        return \redirect()->back();
        
    }
    public function create_about(){
        $data=about::all();
        return view('admin.create_about',compact('data'));
        
    }
    public function create_post_page(Request $request){
        $data=new about;
        $data->names=$request->name;
        $data->des=$request->des;
        $data->title=$request->title;
        $data->sub_des=$request->sub_des;
        
        $data->save();
        return \redirect()->back();
    }
    public function show_about(){
        $data=about::all();
        return view('admin.show_about',compact('data'));
        
    }
    public function delete_about($id){
        $data=about::find($id);
        $data->delete();
        return \redirect()->back();
        
    }
    public function update_about($id){
        $data=about::find($id);
        return view('admin.update_about',compact('data'));
        
    }
    public function edit_about(Request $request,$id){
        
        $data=about::find($id);
        $data->names=$request->name;
        $data->des=$request->des;
        $data->title=$request->title;
        $data->sub_des=$request->sub_des;
        
        $data->save();
        
        return \redirect('show_about');
    }
    public function offer_post(){
        return view('admin.offer_post');
        
        
    }
    public function create_offer_post(Request $request){
        $data=new offer;
        $data->titles=$request->title;
        $data->des=$request->des;
        $data->save();
        return \redirect()->back();
    }
    public function showoffer(){
        $data=offer::all();
        return view('admin.showoffer',compact('data'));
        
        
    }
    public function delete_offer($id){
        $data=offer::find($id);
        $data->delete();
        return \redirect()->back();
        
        
    }
    public function update_offer($id){
        $data=offer::find($id);
        return view('admin.update_offer',compact('data'));
       
        
        
    }
    public function edit_title(Request $request,$id){
        $data=offer::find($id);
        $data->titles=$request->title;
        $data->des=$request->des;
        $data->save();
        return \redirect()->back();
        
        
    }
}
