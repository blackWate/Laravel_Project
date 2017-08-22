<?php

namespace GBA\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use Session;
use Mews\Captcha\Facades\Captcha;


class ContactController extends Controller{

    public function index(){
      $captcha=Captcha::img('flat');

     return view('user.contact',['captcha'=>$captcha]);
    }



    public function postContactForm(Request $request){
        $this->validate($request, [
            'email'=>'required|email|max:255',
            'name'=>'required|max:30',
//            'phone'=>'regex:/(01)[0-9]{9}/',
            'subject'=>'required|max:255',
            'comments'=>'required|min:10|max:500',
            'captcha' => 'required|captcha'
        ],
        [
            'captcha.required' => 'Verification does not match the image'
        ]



      );



        $data=array(
        'email'=>$request->email,
        'name'=>$request->name,
        'phone'=>$request->phone,
        'subject'=>$request->subject,
        'bodyMessage'=>$request->comments
        );

        Mail::send('emails.contactform', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('umkarasu@gmail.com');
            $message->subject($data['subject']);

        });

       Mail::send('emails.contactreplyform', $data, function($message) use ($data){
            $message->from('umkarasu@gmail.com');
            $message->to($data['email']);
            $message->subject($data['subject']);

        });


//        Session::flash('success','Your Email was sent.');
        return redirect()->route('user.contact')
            ->with('info','Your message has been sent successfuly.');
    }
    protected function getRedirectUrl()
{
    return route('user.contact').'#cform';
}
}
