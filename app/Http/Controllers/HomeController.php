<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Contact;
use App\Models\About;
use App\Models\Offer;
class HomeController extends Controller
{
    public function index()
{
    if (Auth::check()) {
        $usertype = Auth::user()->usertype;

        if ($usertype === "admin") {
            $user=user::all()->count();
            $message=contact::all()->count();
            $about=about::all()->count();
            $offer=offer::all()->count();
            return view('admin.index',compact('user','message','about','offer'));
        } elseif ($usertype === "usser") { 
            $about=about::all();
            $offer=offer::all();
            return view('home.user',compact('about','offer'));
        }
    }

    return redirect()->route('login');
}
    public function indexx(){
        $about=about::all();
        $offer=offer::all();
       
        return view('home.user',compact('about','offer'));
    }
    public function postcontact(Request $request){
        if(Auth::id()){

            $data= new contact;
            $data->name=$request->name;
            $data->email=$request->email;
            $data->password=$request->password;
            $data->message=$request->message;
            $data->save();
            return \redirect()->back()->with('message', 'Contact saved successfully.');
        }
        return redirect('login');
    }
}
