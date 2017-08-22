@extends('templates.default')
@section('content')
   @include('templates.partials.header')
     @section('title', '| Home')
      @include('templates.partials.slider')
      @include('templates.partials.news')

    @include('templates.partials.footer')
     <script src="{{URL::asset('/js/app.js')}}" type="text/javascript"></script>
     <script src="{{URL::asset('/js/gba.js')}}" type="text/javascript"></script>

<script  src="{{URL::asset('/js/home.js')}}" type="text/javascript"></script>
@include('templates.partials.alerts')      
@stop
