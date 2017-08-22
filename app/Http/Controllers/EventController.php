<?php

namespace GBA\Http\Controllers;

//use Auth;

class EventsController extends Controller{
    
    public function index(){
    
//    if(Auth::check()){
       
        
     return view('user.events',['page'=>'events']);   
//    }
}
}