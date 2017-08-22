@extends('templates.default') @section('content') @include('templates.partials.header')
@section('title', '| Giving Back')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animated fadeInUp">
        <h3 class="text-center post">GIVING BACK</h2>
        <h3 class="well primary-im text-center">Our members support the education, social and cultural development of children in Guyana and Canada. Initially intended to forge friendships and establish contact with other Guyanese expatriates members can be part of the above worthy vision, realized through the following actions:</h3>
        <div class="masonry-grid row" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-sizer","gutter": ".gutter-sizer","horizontalOrder":"true","percentPosition":"true" }'>
            <div class="grid-sizer"></div>
            <div class="gutter-sizer"></div>
            <div class="grid-item col-sm-6 col-md-4 hvr-float">
                <div class="thumbnail gbboxsh">
                    <a href="">
                        <img src="{{URL::asset('/images/GBA1.jpg')}}" alt="" width="100%">
                    </a>
                    <div class="caption">
                        <h3 class="text-center">THE NEW AMSTERDAM SPECIAL NEEDS SCHOOL</h3>
                        <p>A learning centre for children with speech, hearing and vision impairment.</p>
                    </div>
                </div>
            </div>
            <div class="grid-item col-sm-6 col-md-4 hvr-float">
                <div class="thumbnail gbboxsh">
                    <a href="">
                        <img src="{{URL::asset('/images/GBA2.jpg')}}" alt="" width="100%">
                    </a>
                    <div class="caption">
                        <h3 class="text-center">THE CHILDREN OF PROMISE EDEN ORPHANAGE</h3>
                        <p>Children of Promise Eden Orphanage is a private orphanage for homeless children.</p>
                    </div>
                </div>
            </div>
            <div class="grid-item col-sm-6 col-md-4 hvr-float">
                <div class="thumbnail gbboxsh">
                    <a href="">
                        <img src="{{URL::asset('/images/GBA3.png')}}" alt="" width="100%">
                    </a>
                    <div class="caption">
                        <h3 class="text-center">SICK KIDS HOSPITAL FOUNDATION</h3>
                        <p>Established in 1972, SickKids Foundation raises funds on behalf of The Hospial for Sick Children. SickKids Foundadion is the largest charitable funder of child health research, learning and care in Canada.</p>
                    </div>
                </div>
            </div>
            <div class="grid-item col-sm-6 col-md-4 hvr-float">
                <div class="thumbnail gbboxsh">
                    <a href="">
                        <img src="{{URL::asset('/images/GBA4.jpg')}}" alt="" width="100%">
                    </a>
                    <div class="caption">
                        <h3 class="text-center">THE RUIMVELDT CHILDREN’S AID CENTRE (RCAC)</h3>
                        <p>RCAC is an established centre for disadvantaged children in the local area. It has a daily nutrition programme that feeds around 60 children each day and a programme of activities 7 days a week.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 grid-item hvr-float">
                <div class="thumbnail gbboxsh">
                    <a href="">
                        <img src="{{URL::asset('/images/GBA5.jpg')}}" alt="" width="100%">
                    </a>
                    <div class="caption">
                        <h3 class="text-center">THE POMEROON EDUCATION PROJECT (PEP)</h3>
                        <p>The PEP has been in operation for the last 10 years. With donations from the GBA, the project provided reliable school boat transportation to the only high school in Charity on the Pomeroon River (22 miles each way) daily.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 grid-item hvr-float">
                <div class="thumbnail gbboxsh">
                    <a href="">
                        <img src="{{URL::asset('/images/GBA6.jpg')}}" alt="" width="100%">
                    </a>
                    <div class="caption">
                        <h3 class="text-center">THE CP24 CHUM CHRISTMAS WISH</h3>
                        <p>The CP24 CHUM Christmas Wish programme has become one of the largest distributors of gifts to children in need within the Greater Toronto Area. The programme also provides financial assistance to hundreds of agencies to ensure children across the GTA enjoy a joyous holiday experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('templates.partials.footer')
<script src="{{URL::asset('/js/app.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('/js/gba.js')}}" type="text/javascript"></script>
<script>
   $(window).on('load', function() {
    var $grid=$('.masonry-grid').masonry({
                 columnWidth: '.grid-sizer',
                 gutter: '.gutter-sizer',
                 itemSelector: '.grid-item',
                 horizontalOrder: true,
                 percentPosition: true
                 });
 $grid.imagesLoaded().progress( function() {
  $grid.masonry();
});    });
</script>
               
@stop