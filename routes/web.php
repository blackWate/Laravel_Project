<?php


//Home
Route::get('/',[
    'uses'=>'\GBA\Http\Controllers\HomeController@index',
    'as'=>'user.home',
] );

//alerts
Route::get('/alert',function(){
    return redirect()->route('home')->with('info','You have signed up! ');
} );

//Authentication
    //sign up
        Route::get('signup',[
            'uses'=>'\GBA\Http\Controllers\AuthController@getSignup',
            'as'=>'auth.signup',
            'middleware'=>['guest'],
        ] );
        Route::post('signup',[
            'uses'=>'\GBA\Http\Controllers\AuthController@postSignup',
            'middleware'=>['guest'],
        ] );
    //sign in
        Route::get('signin',[
            'uses'=>'\GBA\Http\Controllers\AuthController@getSignin',
            'as'=>'auth.signin',
        ] );
        Route::post('signin',[
            'uses'=>'\GBA\Http\Controllers\AuthController@postSignin',
        ] );
        //email verification
        Route::get('signin/{token}',[
            'uses'=>'\GBA\Http\Controllers\AuthController@getSigninEV',
            'as'=>'email.verification'
        ] );
    //sign out
        Route::get('signout',[
            'uses'=>'\GBA\Http\Controllers\AuthController@getSignout',
            'as'=>'auth.signout',
        ] );

//Forgot Password
Route::get('password/reset/{token}',[
'uses'=>'\GBA\Http\Controllers\Auth\ResetPasswordController@showResetForm',
      'as'=>'password.reset'
]);

Route::post('password/reset','\GBA\Http\Controllers\Auth\ResetPasswordController@reset');

Route::post('password/email',
'\GBA\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail');

//Route::post('password/email',
//'\GBA\Http\Controllers\MailController@sendPasswordResetEmail()');
//


Route::get('password/reset',[
'uses'=>'\GBA\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm'
]);

//Contact Us
Route::get('contactus',[
    'uses'=>'\GBA\Http\Controllers\ContactController@index',
    'as'=>'user.contact',
] );



Route::post('contactus',[
    'uses'=>'\GBA\Http\Controllers\ContactController@postContactForm',
] );



//Events
Route::get('events',[
    'uses'=>'\GBA\Http\Controllers\EventsController@index',
    'as'=>'user.events',
] );

//Executives
Route::get('executives',[
    'uses'=>'\GBA\Http\Controllers\ExecutivesController@index',
    'as'=>'user.executives',
] );

//Giving Back
Route::get('giving-back',[
    'uses'=>'\GBA\Http\Controllers\GBackController@index',
    'as'=>'user.gback',
] );

//About
Route::get('about-us',[
    'uses'=>'\GBA\Http\Controllers\AboutController@index',
    'as'=>'user.about',
] );

Route::get('getip', function () {
    $ip = '70.48.149.63';
    $data = geoip($ip);
    dd($data);
});

//Clear cache
Route::get('/xyzclear-cache', function() {
    $exitCode = Artisan::call('config:cache');
    
    // return what you want
});
