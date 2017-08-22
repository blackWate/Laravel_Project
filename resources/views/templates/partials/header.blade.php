<div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-container pull-left header-nav-mar black-bgr">
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 header-nav-mar black-bgr">
                <img src="{{URL::asset('/images/gicon.png')}}" width="75" class="hidden-xs logo hidden-sm" /> 
            </div>
            <h1 class="text-center text-info text-white header-nav-mar pull-left col-lg-11 col-md-11 col-sm-11 col-xs-11">Guyana Berbice Association <span class="hidden-xs">-</span> TORONTO</h1>
            <div class="header-nav col-sm-12 col-xs-12 col-lg-12 col-md-12 header-nav-mar">
                <nav class="navbar navbar-inverse header-navbar header-nav-mar" role="navigation"> 
                    <div class="navbar-container header-nav-mar"> 
                        <div class="navbar-header"> 
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
                                <span class="sr-only">Toggle navigation</span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                            </button>                             
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding-left: 10%;"> 
                            <ul class="nav navbar-nav"> 
                                <li class="{{ Request::is('/') ? "active" : "" }}">
                                    <a href="{{route('user.home')}}" class="hvr-overline-from-center">Home</a>
                                </li>
                                                             
                                <li class="dropdown {{ Request::is('about-us') ? "active" : "" }}"> 
                                    <a href="{{route('user.about')}}" class="dropdown-toggle hvr-overline-from-center" data-toggle="dropdown">About Us <b class="caret"></b></a> 
                                    <ul class="dropdown-menu"> 
                                        <li>
                                            <a href="#" class="hvr-overline-from-center">Membership</a>
                                        </li>                                         
                                    </ul>                                     
                                </li>
                                <li class="dropdown {{ Request::is('executives') ? "active" : "" }}"> 
                                    <a data-target="{{route('user.executives')}}" href="{{route('user.executives')}}" class="dropdown-toggle hvr-overline-from-center" data-toggle="dropdown">Executives <b class="caret"></b></a> 
                                    <ul class="dropdown-menu"> 
                                        <li>
                                            <a href="#" class="hvr-overline-from-center">Letter From<br>The GBA President</a>
                                        </li>                                         
                                    </ul>                                     
                                </li>
                                <li class="{{ Request::is('giving-back') ? "active" : "" }}">
                                    <a href="{{route('user.gback')}}" class="hvr-overline-from-center">Giving Back</a>
                                </li>
                                <li class="{{ Request::is('events') ? "active" : "" }}">
                                    <a href="{{route('user.events')}}" class="hvr-overline-from-center">Events</a>
                                </li>
                               <!--  <li class="{{ Request::is('links') ? "active" : "" }}">
                                    <a href="#" class="hvr-overline-from-center">Useful Links</a>
                                </li> -->
                                <li class="{{ Request::is('contactus') ? "active" : "" }}">
                                    <a href="{{route('user.contact')}}" class="hvr-overline-from-center">Contact Us</a>
                                </li>                                 
                            </ul>                             
                            <ul class="nav navbar-nav nav-search-media320 pull-right">
                               @if(!Auth::check()) 
                                <li role="button" class="btn btn-primary pull-left sign-btn">
                                    <a href="{{route('auth.signup')}}" class="sign-link">Sign Up</a>
                                </li>                                 
                                <li role="button" class="btn btn-success sign-button pull-left sign-btn">
                                    <a href="{{route('auth.signin')}}" class="sign-link">Sign In</a>
                                </li>                                 
                            </ul>
                            @else                             
                            <ul class="nav navbar-nav navbar-right"> 
                               
                                                             
                                <li role="button" class="btn btn-danger sign-button sign-btn pull-right" >
                                    <a href="{{route('auth.signout')}}" class="sign-link"
                                    data-method="GET"
    data-confirm="Are you sure?"
    data-title="Please confirm"
    data-theme="sweetalert">Sign Out</a>
                                </li>  
                                 
                                <li class="pull-right">
                                    <a href="#" class="dropdown-toggle hvr-overline-from-center header-nav-mar" data-toggle="dropdown" style="text-transform: capitalize;"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Hi, {{Auth::user()->username}}</a>
                                    <ul class="dropdown-menu"> 
                                        <li>
                                            <a href="#" class="hvr-overline-from-center"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;Settings</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Profile</a>
                                        </li>                                         
                                    </ul>
                                </li>    

                            </ul>
                            @endif                                
                        </div>                         
                    </div>                     
                </nav>                 
            </div>             
            </div>
</div>