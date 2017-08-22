<?php

namespace GBA\Http\Controllers;
use Illuminate\Http\Request;
//use Auth;

class AboutController extends Controller{
    
    public function index(){
        
     return view('user.about',['page'=>'about']); 
}
}