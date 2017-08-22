<?php

namespace GBA\Http\Controllers;


class ExecutivesController extends Controller{
    
    public function index(){
    
        
     return view('user.executives',['page'=>'executives']); 
}
}