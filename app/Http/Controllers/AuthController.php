<?php

namespace GBA\Http\Controllers;

use Illuminate\Http\Request;
use GBA\Models\User;
use Auth;
use Illuminate\Support\Str;
use Mail;
class AuthController extends Controller{

    public function getSignup(){

     return view('auth.signup')->with('page','home');
    }

    public function postSignup(Request $request){

        $this->validate($request, [
         'email'=>'required|unique:users|email|max:255',
         'username'=>'required|unique:users|alpha_dash|max:20',
         'password'=>'required|min:6',
         'repassword'=>'required|same:password',
        ],[
         'repassword.same'=>'The passwords should match.',
         'repassword.required'=>'The Confirm password field is required.',
        ]

        );
        $data=$request->all();
        $token=Str::random(40);
        $data['token']=$token;
        //location data
        $userip=$request->ip();
        $location= geoip($userip);
        User::create([
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
            'verifyToken'=>$token,
            'ip'=>$userip,
            'country'=>$location['country'],
            'city'=>$location['city'],
            'state'=>$location['state'],
            'state_name'=>$location['state_name'],
            'postal_code'=>$location['postal_code'],
            'currency'=>$location['currency']
        ]);

        Mail::send('emails.verifyemail',$data,function($message) use ($data){
          $message->to($data['email']);
          $message->subject('Registration Confirmation');
        });

        return redirect()
            ->route('user.home')
            ->with('text','Your account has been created. Please check your email to sign in!')
            ->with('title','Congrats!')
            ->with('type','success');
    }

    public function getSignin(){

     return view('auth.signin');
    }

    public function getSigninEV($token){

      $user=User::where('verifyToken',$token)->first();


      if($user){
        if($user->verified)
        return redirect()->route('auth.signin')
        ->with('text','Your Email already has been verified, No email verification needed.')
        ->with('title','Already verified')
        ->with('type','info');

        $user->verified=1;
        $user->save();
        return redirect(route('auth.signin'))
        ->with('text','Your Email is verified, now you can sign in your account.')
        ->with('title','Ready to Sign In!')
        ->with('type','success');
      }
      // return redirect(route('auth.signin'))->with('verification','Your Email already has been verified, you can sign in your account now.');
      return redirect(route('user.home'))
            ->with('text','Something went wrong. Please try again.')
            ->with('title','Oops!')
            ->with('type','error');

    }


//
    public function postSignin(Request $request){

    $this->validate($request, [
         'email'=>'required|email',
         'password'=>'required|min:6'
     ]);
        if(!Auth::attempt($request->only(['email','password']),$request->has('remember'))){
            return redirect()
            ->back()
            ->with('text','Could not sign in with those credentials.')
            ->with('title','Wrong Credentials!')
            ->with('type','error');
        }
        // else if(!Auth::user()->isAdmin()){
        if(!Auth::user()->verified)
        return redirect(route('auth.signin'))
        ->with('text','Your Email is not verified, please check your Email account to verify your account.')
        ->with('title','Please Check Your Email!')
        ->with('type','error');

        return redirect()
            ->route('user.home')
            ->with('text','You are now signed in.')
            ->with('title','Success!')
            ->with('type','success')
            ->with('timer',1500);
        //  }else{
        //     return redirect()
        //     ->route('admin.home');
        // }
    }

     public function getSignout(){
         Auth::logout();
         return redirect()
            ->route('user.home');
    }


}
