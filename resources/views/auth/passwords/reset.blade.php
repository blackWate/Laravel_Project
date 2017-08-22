@extends('templates.default') @section('content') @include('templates.partials.header') @section('title', '| Forgot Password') @include('templates.partials.slider')
<div class="container">
    <div class="wrapper">
        <div class="container">
            <div class="row" style="margin-top:10%">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-body fpass">
                            <div class="text-center">
                                <h2 class="text-center">Reset Password</h2>
                                <a href="{{ route('user.home')}}" class="btn btn-success btn-cls" aria-label="Close" role="button" style="left: 345px;"><span class="txt-cls" aria-hidden="true">&times;</span></a>
                                
                                <form class="form" method="post" action="{{url('password/reset')}}">
                                    <fieldset>
                                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                                <input placeholder="email" name="email" class="form-control" type="email" required value="{{ Request::old('username') ?:'' }}"> 
                                            </div>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
                                        </div>
                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password" class="control-label">Choose a password</label>
                                            <input type="password" name="password" class="form-control" id="password" value=""> @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
                                        </div>
                                        <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                            <label for="repassword" class="control-label">Confirm your password</label>
                                            <input type="password" name="password_confirmation" class="form-control" value=""> @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span> @endif
                                        </div>
                                        <div class="form-group">
                                            <input class="btn btn-lg btn-block bg-primary" value="Reset Password" type="submit">
                                        </div>
                                    </fieldset>
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
</div>