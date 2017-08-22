@extends('templates.default') @section('content') @include('templates.partials.header')
@section('title', '| Sign In')
@include('templates.partials.slider')
<div class="container">
<div class="wrapper">
 <div id="signin" class="login">
  <h2>Log In</h2>
  <a href="{{ route('user.home')}}" class="btn btn-success btn-cls" aria-label="Close" role="button"><span class="txt-cls" aria-hidden="true">&times;</span></a>
  <form class="form-vertical" role="form" method="post" action="{{ route('auth.signin') }}">
            <div class="form-group {{ $errors->has('email') ? ' has-error':''}}">

               <label for="email" class="control-label">Email</label>
               <input type="text" name="email" class="form-control" id="email">
                @if($errors->has('email'))
                <span class="help-block">{{ $errors->first('email') }}</span>
                @endif
			</div>
            <div class="form-group{{ $errors->has('password') ? ' has-error':''}}">
				<label for="password" class="control-label">Password</label>
				<input type="password" name="password" class="form-control" id="password">
				@if($errors->has('password'))
                <span class="help-block">{{ $errors->first('password') }}</span>
                @endif
			</div>
             <div class="checkbox">
				<label style="color: whitesmoke;">
					<input type="checkbox" name="remember"> Remember me
				</label>
			</div>
			<div class="form-gorup">
				<button type="submit" class="btn btn-success" style="width: 100%;">Sign in</button>
			</div>
			{{ csrf_field() }}
		</form>
  <div class="utilities">

    <a href="{{url('password/reset')}}">Forgot Password?</a>
    <a href="{{route('auth.signup')}}">Sign Up &rarr;</a>
  </div>
</div>
</div>
@include('templates.partials.footer')
<script src="{{URL::asset('/js/app.js')}}" type="text/javascript"></script>
 <script src="{{URL::asset('/js/gba.js')}}" type="text/javascript"></script>

@include('templates.partials.alerts')                            


@stop
