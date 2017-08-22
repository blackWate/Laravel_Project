 @extends('templates.default') @section('content') @include('templates.partials.header')
 @section('title', '| Sign Up')
 @include('templates.partials.slider')
<div class="container">
    <div class="wrapper">
        <div id="signup" class="login" style="background-image: -webkit-linear-gradient(90deg, #0b3b65, #286090);">
            <h2>Sign Up</h2>
            <a href="{{ route('user.home')}}" class="btn btn-primary btn-cls" aria-label="Close" role="button"><span class="txt-cls" aria-hidden="true">&times;</span></a>
            <form class="form-vertical" role="form" method="post" action="{{ route('auth.signup') }}">
                <div class="form-group{{ $errors->has('email') ? ' has-error':''}}">
                    <label for="email" class="control-label">Your email address</label>
                    <input type="text" name="email" class="form-control" id="email" value="{{ Request::old('email') ?:'' }}"> @if($errors->has('email'))
                    <span class="help-block">{{ $errors->first('email') }}</span> @endif
                </div>
                <div class="form-group{{ $errors->has('username') ? ' has-error':''}}">
                    <label for="username" class="control-label">Choose a username</label>
                    <input type="text" name="username" class="form-control" id="username" value="{{ Request::old('username') ?:'' }}"> @if($errors->has('username'))
                    <span class="help-block">{{ $errors->first('username') }}</span> @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error':''}}">
                    <label for="password" class="control-label">Choose a password</label>
                    <input type="password" name="password" class="form-control" id="password" value=""> @if($errors->has('password'))
                    <span class="help-block">{{ $errors->first('password') }}</span> @endif
                </div>
                <div class="form-group{{ $errors->has('repassword') ? ' has-error':''}}">
                    <label for="repassword" class="control-label">Confirm your password</label>
                    <input type="password" name="repassword" class="form-control" id="repassword" value=""> @if($errors->has('repassword'))
                    <span class="help-block">{{ $errors->first('repassword') }}</span> @endif
                </div>
                <div class="form-gorup">
                    <button type="submit" class="btn btn-primary" style="width: 100%;">Sign Up</button>
                </div>
                {{ csrf_field() }}
            </form>
            <div class="utilities">

                <a href="{{url('password/reset')}}">Forgot Password?</a>
                <a href="{{ route('auth.signin') }}">Sign In &rarr;</a>
            </div>
        </div>
    </div>
@include('templates.partials.footer')
<script src="{{URL::asset('/js/app.js')}}" type="text/javascript"></script> @stop