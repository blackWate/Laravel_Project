@extends('templates.default') @section('content') @include('templates.partials.header')
@section('title', '| Executives')
<div class="container">
<div class="row">
    <div class="tb-margin ">
        <div class="row well" style="background-color: #bdbfc0; border: none;">
            <div class="pull-left col-lg-2 col-md-2 col-sm-2 col-xs-3">
                <img src="{{URL::asset('/images/gicon.png')}}" class="img-responsive" alt="gba logo" style="max-width: 75%;">
            </div>
            <div class="pull-left col-sm-8 col-md-8 col-lg-8 text-center col-xs-6 animated fadeInUp">
                <h3 class="hidden-xs post">EXECUTIVES</h3>
                <hr>
            </div>
            <div class="pull-left col-lg-2 col-md-2 col-sm-2 col-xs-3">
                <img src="{{URL::asset('/images/gicon.png')}}" class="img-responsive pull-right" alt="gba logo" style="max-width: 75%;">
            </div>
        </div>
    </div>
    <div>
        <div class="row tb-margin">
            <div class="col-sm-4 col-sm-push-1 col-lg-4 col-md-4 col-xs-8 col-xs-push-2">
                <div class="post text-center lb-red">
                    <h3 class="bg-primary">Peter Hestick</h3>
                    <h4>President</h4>
                </div>
            </div>
            <div class="col-sm-4 col-sm-push-3 col-lg-4 col-md-4 col-xs-8 col-xs-push-2">
                <div class="post text-center lb-red">
                    <h3 class="bg-primary">Pats LaRose</h3>
                    <h4>Past President</h4>
                </div>
            </div>
        </div>
        <div class="row tb-margin">
            <div class="col-sm-4 col-sm-push-1 col-lg-4 col-md-4 col-xs-8 col-xs-push-2">
                <div class="post text-center lb-red">
                    <h3 class="bg-primary">Vanessa Pearson</h3>
                    <h4>Secretary</h4>
                </div>
            </div>
            <div class="col-sm-4 col-sm-push-3 col-lg-4 col-md-4 col-xs-8 col-xs-push-2">
                <div class="post text-center lb-red">
                    <h3 class="bg-primary">Julia Richardson</h3>
                    <h4>Assistant Secretary</h4>
                </div>
            </div>
        </div>
        <div class="row tb-margin">
            <div class="col-sm-4 col-sm-push-1 col-lg-4 col-md-4 col-xs-8 col-xs-push-2">
                <div class="post text-center lb-red">
                    <h3 class="bg-primary">Richard Pearson</h3>
                    <h4>First Vice-President</h4>
                </div>
            </div>
            <div class="col-sm-4 col-sm-push-3 col-lg-4 col-md-4 col-xs-8 col-xs-push-2">
                <div class="post text-center lb-red">
                    <h3 class="bg-primary">Lilith Thompson</h3>
                    <h4>Second Vice-President</h4>
                </div>
            </div>
        </div>
        <div class="row tb-margin">
            <div class="col-sm-4 col-sm-push-1 col-lg-4 col-md-4 col-xs-8 col-xs-push-2">
                <div class="post text-center lb-red">
                    <h3 class="bg-primary">Wilfred Carr</h3>
                    <h4>Treasurer</h4>
                </div>
            </div>
            <div class="col-sm-4 col-sm-push-3 col-lg-4 col-md-4 col-xs-8 col-xs-push-2">
                <div class="post text-center lb-red">
                    <h3 class="bg-primary">Elwin Steaman</h3>
                    <h4>Assistant Treasurer</h4>
                </div>
            </div>
        </div>
        <div class="row tb-margin">
            <div class="col-xs-8 col-lg-4 col-md-4 col-sm-4 col-xs-offset-2 col-lg-offset-0 col-md-offset-0 col-sm-offset-0">
                <div class="post text-center lb-red">
                    <h3 class="bg-primary">Yvonne Pearce</h3>
                    <h4>Chairperson Membership</h4>
                </div>
            </div>
            <div class="col-xs-8 col-lg-4 col-md-4 col-sm-4 col-xs-offset-2 col-lg-offset-0 col-md-offset-0 col-sm-offset-0">
                <div class="post text-center lb-red">
                    <h3 class="bg-primary">Pats LaRose</h3>
                    <h4>Chairperson Outreach</h4>
                </div>
            </div>
            <div class="col-xs-8 col-lg-4 col-md-4 col-sm-4 col-xs-offset-2 col-lg-offset-0 col-md-offset-0 col-sm-offset-0">
                <div class="post text-center lb-red">
                    <h3 class="bg-primary">Claudette Ugoji</h3>
                    <h4>Chairperson Entertainment</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
</div>
@include('templates.partials.footer')
<script src="{{URL::asset('/js/app.js')}}" type="text/javascript"></script>
@stop