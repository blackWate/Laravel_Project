@extends('templates.default') 
@section('content') 
@include('templates.partials.header')
@section('title', '| Forgot Password')
@include('templates.partials.slider')
<div class="container">
    <div class="wrapper">
<div class="container">
        <div class="row" style="margin-top:11%">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body fpass">
                        <div class="text-center">
                            <h3><i class="fa fa-lock fa-4x text-primary" style="color:#4A4A4A;"></i></h3>
                            <h2 class="text-center">Forgot Password?</h2>
                            <p>You can reset your password here.</p>
                            <a href="{{ route('user.home')}}" class="btn btn-success btn-cls" aria-label="Close" role="button" style="left: 345px;"><span class="txt-cls" aria-hidden="true">&times;</span></a>
                            <div class="panel-body">
                              <!--  @if(session('status'))
                                 <div class="alert alert-success">
                                     {{session('status')}}
                                 </div>
                               @endif -->
                                <form class="form" method="post" action="{{url('password/email')}}">
                                    <fieldset>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                                <input name="email" placeholder="email address" class="form-control" type="email" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input class="btn btn-lg btn-block bg-primary" value="Send My Password" type="submit" >
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
@include('templates.partials.footer')
<script src="{{URL::asset('/js/app.js')}}" type="text/javascript"></script>
 <script src="{{URL::asset('/js/gba.js')}}" type="text/javascript"></script>
  @if(session('status'))
                                        <script type="text/javascript">
                                            swal({
                                                  title: '{{Session('status')}}\nPlease Check your Email',
                                                  type:'success',
                                                 html:true,
                                                showConfirmButton:false,
                                                text:'<a href="{{route('user.home')}}" role="button" class="btn btn-primary"><i class="fa fa-thumbs-up fa-3x"></i></a>'
                                                })

                                        </script>
                                        @endif
                                       @if($errors->has('email'))
                                        <script type="text/javascript">
                                            var error="{!!$errors->first('email')!!}";
                                            swal({
                                                  title: error+'\nPlease try again.',
                                                  type:'error',
                                                  timer:3000
                                                
                                                })

                                        </script>
                                       
                                       @endif
@stop

