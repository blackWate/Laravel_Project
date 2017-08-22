@extends('templates.default') @section('content') @include('templates.partials.header')
@section('title', '| Contact Us')
<div class="row">
    <div class="container tb-margin">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row well">
                <div class="pad20 pad-bottom20 soft-scroll col-sm-12 col-xs-12 col-lg-9 col-md-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2878.077427162913!2d-79.2720534!3d43.8334925!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4d6bf25221473%3A0x2aa68b3f6179387b!2s97+Norn+Crescent%2C+Markham%2C+ON+L3S+2A3!5e0!3m2!1sen!2sca!4v1494123352445" height="500" frameborder="0" style="border:0" allowfullscreen width="100%"></iframe>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                    <dl> <dt>Email</dt>
                        <dd> <a href="mailto:gbatoronto@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> Send an Email</a> </dd> <dt><i class="fa fa-map-marker" aria-hidden="true"></i> Address</dt>
                        <dd> <address>
          97 Norn Crescent<br>
          Markham<br>
          L3S 2A3<br>
          Toronto ON CANADA</address> </dd>
                        <dd class="social-links"> <a class="fb" href="https://www.facebook.com/gbatoronto/" title="Find us on Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a> </dd>
                    </dl>
                </div>
            </div>
            <div id="cform" class="content-block contact-3 well">
                <h3>Contact Us</h3>
                <div >
                    <div class="row tb-margin">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div id="contact" class="form-container">
                <fieldset>
                    <div id="message"></div>
                    <form method="post" action="{{route('user.contact')}}" name="contactform" id="contactform">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="form-group {{ $errors->has('name') ? ' has-error':''}}"  data-pg-id="1796">
                                <input name="name" id="name" type="text" value="{{ Request::old('name') ?:'' }}" placeholder="*Name" class="form-control" />
                                @if($errors->has('name'))
                                <span class="help-block">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('email') ? ' has-error':''}}"  data-pg-id="1799">
                                <input name="email" id="email" type="text" value="{{ Request::old('email') ?:'' }}" placeholder="*Email" class="form-control" />
                                @if($errors->has('email'))
                                <span class="help-block">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group" >
                                <input name="phone" id="phone" type="text" value="{{ Request::old('phone') ?:'' }}" placeholder="Phone" class="form-control" />
                            </div>
                            <div class="form-group {{ $errors->has('name') ? ' has-error':''}}"  data-pg-id="1804">
                                <input name="subject" id="subject" type="text" value="{{ Request::old('subject') ?:'' }}" placeholder="*Subject" class="form-control" />
                                @if($errors->has('subject'))
                                <span class="help-block">{{ $errors->first('subject') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group {{ $errors->has('comments') ? ' has-error':''}}">
                                <textarea name="comments" id="comments" class="form-control" rows="8" placeholder="*Message" id="textArea"  style="resize:vertical;">{{ Request::old('comments') ?:'' }}</textarea>
                                @if($errors->has('comments'))
                                <span class="help-block">{{ $errors->first('comments') }}</span>
                                @endif
                                <div>
                                    <p class="small text-muted"><span>* Fields are required.</span> Once we receive your message we will respond as soon as possible.</p>
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('captcha') ? ' has-error':''}}"  >
                              {!!$captcha!!}
                                <input type="text" id="captcha" name="captcha" placeholder="*type the code in the image" class="form-control" style="width: 41%;"/>
                                @if($errors->has('captcha'))
                                <span class="help-block">{{ $errors->first('captcha') }}</span>
                                @endif
                            </div>
                            <div class="form-group" >
                                <button class="btn btn-primary" type="submit" id="cf-submit" name="submit">Send</button>
                            </div>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </fieldset>
            </div>
            <!-- /.form-container -->
        </div>
    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
        </div>
    </div>
</div>
@include('templates.partials.footer')
<script src="{{URL::asset('/js/app.js')}}" type="text/javascript"></script>
 <script src="{{URL::asset('/js/gba.js')}}" type="text/javascript"></script>
 @if(Session::has('info'))
                                        <script type="text/javascript">
                                            swal({
                                                  title: 'Success!',
                                                  text: 'Your Message has been sent successfully',
                                                  timer: 3000,
                                                  type: 'success'
                                                });
                                        </script>
                                        @endif
@stop
