<?php

namespace GBA\Http\Controllers;
use Illuminate\Http\Request;
//use Auth;

class HomeController extends Controller{
    
    public function index(Request $request){
    
        // if(!$request->cookie('splash')){
        //   return response()->view('splash')->withCookie(cookie('splash', 'true',3600));
        // }
        
     return view('user.home',['page'=>'home']); 
}
}