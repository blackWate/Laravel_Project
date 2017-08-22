@extends('templates.default') 
@section('content') 
@include('templates.partials.header')
@section('title', '| About')
<div class="row">
   <div class="container-fluid">
    <div class="row tb-margin" >
        <div class="col-lg-2 col-sm-2 col-xs-2 col-md-2">
            <img src="{{URL::asset('/images/ship-logo.png')}}" width="95" height="125" class="pull-left hidden-xs" />
        </div>
        <div class="col-lg-8 col-sm-8 col-xs-8 col-md-8 animated fadeInUp">
            <h3 class="text-uppercase text-center post">We give in return</h3> 
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <img src="{{URL::asset('/images/crown-logo.png')}}" width="95" height="125" class="pull-right hidden-xs" />
        </div>
    </div>
    <div class="col-md-4 col-lg-4 col-lg-offset-4 col-sm-offset-4 col-md-offset-4 col-sm-4 col-xs-12">
        <div class="well au-topm au-pic-shw abs full-wimg">
            <h3 class="text-center">HOW  WE  HELP</h3>
            <p>Through donations, fundraisers and memberships, our organization is able to offer charitable donations in both Guyana and Canada.  We seek to help children, the elderly, and people with disabilities.</p>
        </div>         
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4">
        <div class="well au-topm2 au-pic-shw abs full-wimg">
            <h3 class="text-center">VISION</h3>
            <p>We seek to maintain kinship and camaraderie among our members,
provide support to less fortunate children in Canada and Guyana,
and promote the establishment of new chapters worldwide.</p>
        </div>         
    </div>
    <div class="col-xs-12 col-md-4 col-lg-4 col-lg-offset-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
        <div class="well au-topm3 au-pic-shw abs full-wimg">
            <h3 class="text-center">MISSION</h3>
            <p>Our mission is to promote the cultural spirit of the Guyanese people
while providing assistance to less fortunate individuals and needy causes.
The GBA hosts chapters in Toronto, New York, D.C., London, and Guyana.</p>
        </div>         
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" data-pg-collapsed> 
        <div>
            <div class="pull-left col-xs-12 col-lg-5 col-md-5 col-sm-5">
                <img src="{{URL::asset('/images/kid1.png')}}" alt="" class="full-wimg" />
            </div>
            <div class="pull-left col-xs-12 col-lg-7 col-md-7 col-sm-7">
                <img src="{{URL::asset('/images/kid4.png')}}" alt="" class="full-wimg" />
            </div>
            <div class="pull-left col-xs-12 col-lg-8 col-md-8 col-sm-8">
                <img src="{{URL::asset('/images/kid6.png')}}" alt=""  class="full-wimg" />
            </div>
            <div class="pull-left col-xs-12 col-lg-4 col-md-4 col-sm-4">
                <img src="{{URL::asset('/images/kid5.png')}}" alt="" class="full-wimg" />
            </div>
            <div class="col-xs-12 pull-left col-lg-12 col-md-12 col-sm-12">
                <img src="{{URL::asset('/images/kid2.png')}}" alt="" class="full-wimg" />
            </div>
            <div class="pull-left col-xs-12 col-lg-5 col-sm-5 col-md-5">
                <img src="{{URL::asset('/images/kid7.png')}}" alt="" class="full-wimg au-bmarz" />
            </div>
            <div class="pull-left col-xs-12 col-lg-7 col-md-7 col-sm-7">
                <img src="{{URL::asset('/images/kid3.png')}}" alt="" class="full-wimg" />
            </div>
        </div>
    </div>
</div>
</div>
@include('templates.partials.footer')
<script src="{{URL::asset('/js/app.js')}}" type="text/javascript"></script>
@stop