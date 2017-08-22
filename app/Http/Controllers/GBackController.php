<?php

namespace GBA\Http\Controllers;
use Illuminate\Http\Request;
//use Auth;

class GBackController extends Controller{
    
    public function index(){
        
     return view('user.gback',['page'=>'gback']); 
}
}