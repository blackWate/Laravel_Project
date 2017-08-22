@extends('templates.default') @section('content') @include('templates.partials.header')
@section('title', '| Events')
<div class="modal fade target" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn btn-primary pull-right" data-dismiss="modal">X</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div id="gmap" class="col-md-12" style="height:600px">
                    
                        
                    
                    </div>
                    
                </div>
            </div>
            
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tb-margin ">
       <h3 class="text-center post">EVENTS</h3>
       
       
        <div class="row tb-margin well lr15-margin event-bgc" >
            <div class="event-datebox text-center event-dateboxc col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="pull-left col-sm-9 col-md-9 col-lg-9 col-xs-9 plz">
                    <span class="events-datetext text-center">&nbsp;31<br>JAN</span>
                </div>
                <div class="pull-right col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="events-datetext rotate90">2016</div>
                </div>
            </div>
            <div class="events-datetic full-height col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    <h3 class="ticmargin">1ST EXECUTIVE MEETING</h3>
                    
                        <p class="text-primary">2:00PM – 5:00PM</p>
                    </p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 pull-right narrowsec no-padding col-xs-1">
                    <ul class="no-dec text-center no-decor no-padding">
                        <li>
                            <a href="mailto:gbatoronto@gmail.com?Subject=1ST EXECUTIVE MEETING" class="text-center"><i class="fa fa-2x fa-envelope-o"></i></a>
                        </li>
                        <li>
                            <hr>
                        </li>
                        <li>
                            <a href="" class="disabled"><i class="fa fa-map-marker fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        
        <div class="row tb-margin well lr15-margin event-bgc" >
            <div class="event-datebox text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="pull-left col-sm-9 col-md-9 col-lg-9 col-xs-9 plz">
                    <span class="events-datetext text-center">&nbsp;03<br>APR</span>
                </div>
                <div class="pull-right col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="events-datetext rotate90">2016</div>
                </div>
            </div>
            <div class="events-datetic full-height col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    <h3 class="ticmargin">1ST GENERAL MEMBERSHIP MEETING</h3>
                    <p><strong class="text-muted address">THORNHILL COMMUNITY CENTRE<br>
7755 BAYVIEW AVE,  THORNHILL, ON</strong>
                        <p class="text-primary">2:00PM – 5:00PM</p>
                    </p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 pull-right narrowsec no-padding col-xs-1">
                    <ul class="no-dec text-center no-decor no-padding">
                        <li>
                            <a href="mailto:gbatoronto@gmail.com?Subject=1ST GENERAL MEMBERSHIP MEETING" class="text-center"><i class="fa fa-2x fa-envelope-o"></i></a>
                        </li>
                        <li>
                            <hr>
                        </li>
                        <li>
                           <a href="javascript:void(0)" class="addr" title="THORNHILL COMMUNITY CENTRE 7755 BAYVIEW AVE, THORNHILL, ON" data-toggle="modal" data-target=".target"> <i  class="fa fa-map-marker fa-2x"></i>
                        </li></a>
                    </ul>
                </div>
            </div>
        </div>
        
        
        <div class="row tb-margin well lr15-margin event-bgc" >
            <div class="event-datebox event-dateboxc text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="pull-left col-sm-9 col-md-9 col-lg-9 col-xs-9 plz">
                    <span class="events-datetext text-center">&nbsp;28<br>MAY</span>
                </div>
                <div class="pull-right col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="events-datetext rotate90">2016</div>
                </div>
            </div>
            <div class="events-datetic full-height col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    <h3 class="ticmargin">WALK – A – THON</h3>
                    <p><strong class="text-muted">ST. PAUL L’AMOREAU CHURCH CENTRE<br>
3333 FINCH AVE EAST, TORONTO, ON</strong>
                        <p class="text-primary">8:00AM</p>
                    </p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 pull-right narrowsec no-padding col-xs-1">
                    <ul class="no-dec text-center no-decor no-padding">
                        <li>
                            <a href="mailto:gbatoronto@gmail.com?Subject=WALK – A – THON" class="text-center"><i class="fa fa-2x fa-envelope-o"></i></a>
                        </li>
                        <li>
                            <hr>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="addr" title="St. Paul's L'Amoreaux Anglican Church CENTRE 3333 FINCH AVE EAST" data-toggle="modal" data-target=".target"> <i  class="fa fa-map-marker fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        
        <div class="row tb-margin well lr15-margin event-bgc" >
            <div class="event-datebox text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="pull-left col-sm-9 col-md-9 col-lg-9 col-xs-9 plz">
                    <span class="events-datetext text-center">&nbsp;05<br>JUN</span>
                </div>
                <div class="pull-right col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="events-datetext rotate90">2016</div>
                </div>
            </div>
            <div class="events-datetic full-height col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    <h3 class="ticmargin"> EXECUTIVE MEETING</h3>
                    
                        <p class="text-primary">2:00PM – 5:00PM</p>
                
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 pull-right narrowsec no-padding col-xs-1">
                    <ul class="no-dec text-center no-decor no-padding">
                        <li>
                            <a href="mailto:gbatoronto@gmail.com?Subject=EXECUTIVE MEETING" class="text-center"><i class="fa fa-2x fa-envelope-o"></i></a>
                        </li>
                        <li>
                            <hr>
                        </li>
                        <li>
                            <a href="" class="disabled"><i class="fa fa-map-marker fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        
        <div class="row tb-margin well lr15-margin event-bgc" >
            <div class="event-datebox event-dateboxc text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="pull-left col-sm-9 col-md-9 col-lg-9 col-xs-9 plz">
                    <span class="events-datetext text-center">&nbsp;25<br>JUN</span>
                </div>
                <div class="pull-right col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="events-datetext rotate90">2016</div>
                </div>
            </div>
            <div class="events-datetic full-height col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    <h3 class="ticmargin"> GBA MEMBERS’ & FRIENDS’ OUTING</h3>
                    
                        <p>(USUALLY A BUS TRIP)</p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 pull-right narrowsec no-padding col-xs-1">
                    <ul class="no-dec text-center no-decor no-padding">
                        <li>
                            <a href="mailto:gbatoronto@gmail.com?Subject=GBA MEMBERS’ & FRIENDS’ OUTING" class="text-center"><i class="fa fa-2x fa-envelope-o"></i></a>
                        </li>
                        <li>
                            <hr>
                        </li>
                        <li>
                            <a href="" class="disabled"><i class="fa fa-map-marker fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        
         <div class="row tb-margin well lr15-margin event-bgc" >
            <div class="event-datebox text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="pull-left col-sm-9 col-md-9 col-lg-9 col-xs-9 plz">
                    <span class="events-datetext text-center">&nbsp;30<br>JUL</span>
                </div>
                <div class="pull-right col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="events-datetext rotate90">2016</div>
                </div>
            </div>
            <div class="events-datetic full-height col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    <h3 class="ticmargin">CARIBANA DANCE</h3>
                    <p><strong class="text-muted">MILLIKEN MILLS COMMUNITY CENTRE<br>
7600 KENNEDY ROAD,  MARKHAM, ON</strong>
                        <p class="text-primary">8:00PM – 2:00AM</p>
                    </p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 pull-right narrowsec no-padding col-xs-1">
                    <ul class="no-dec text-center no-decor no-padding">
                        <li>
                            <a href="mailto:gbatoronto@gmail.com?Subject=CARIBANA DANCE" class="text-center"><i class="fa fa-2x fa-envelope-o"></i></a>
                        </li>
                        <li>
                            <hr>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="addr" title="MILLIKEN MILLS COMMUNITY CENTRE 7600 KENNEDY ROAD,  MARKHAM, ON" data-toggle="modal" data-target=".target"> <i  class="fa fa-map-marker fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        
         <div class="row tb-margin well lr15-margin event-bgc" >
            <div class="event-datebox event-dateboxc text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="pull-left col-sm-9 col-md-9 col-lg-9 col-xs-9 plz">
                    <span class="events-datetext text-center">&nbsp;24<br>SEP</span>
                </div>
                <div class="pull-right col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="events-datetext rotate90">2016</div>
                </div>
            </div>
            <div class="events-datetic full-height col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    <h3 class="ticmargin">MEMBERS’ & SUPPORTERS’ EVENING</h3>
                    <p><strong class="text-muted">ST. PAUL L’AMOREAU CHURCH CENTRE<br>
3333 FINCH AVE EAST</strong>
                        <p class="text-primary">6:00PM – 11:00PM</p>
                    </p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 pull-right narrowsec no-padding col-xs-1">
                    <ul class="no-dec text-center no-decor no-padding">
                        <li>
                            <a href="mailto:gbatoronto@gmail.com?Subject=MEMBERS & SUPPORTERS EVENING" class="text-center"><i class="fa fa-2x fa-envelope-o"></i></a>
                        </li>
                        <li>
                            <hr>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="addr" title="St. Paul's L'Amoreaux Anglican Church CENTRE 3333 FINCH AVE EAST" data-toggle="modal" data-target=".target"> <i  class="fa fa-map-marker fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        
        <div class="row tb-margin well lr15-margin event-bgc" >
            <div class="event-datebox text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="pull-left col-sm-9 col-md-9 col-lg-9 col-xs-9 plz">
                    <span class="events-datetext text-center">&nbsp;16<br>OCT</span>
                </div>
                <div class="pull-right col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="events-datetext rotate90">2016</div>
                </div>
            </div>
            <div class="events-datetic full-height col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    <h3 class="ticmargin">ANNUAL FALL BRUNCH</h3>
                    <p><strong class="text-muted">SCARLET IBIS RESTAURANT<br>
1880 O’CONNOR DRIVE,  NORTH YORK, ON</strong>
                        <p class="text-primary">12:00PM – 4:30PM</p>
                    </p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 pull-right narrowsec no-padding col-xs-1">
                    <ul class="no-dec text-center no-decor no-padding">
                        <li>
                            <a href="mailto:gbatoronto@gmail.com?Subject=ANNUAL FALL BRUNCH" class="text-center"><i class="fa fa-2x fa-envelope-o"></i></a>
                        </li>
                        <li>
                            <hr>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="addr" title="SCARLET IBIS RESTAURANT 1880 O’CONNOR DRIVE,  NORTH YORK, ON" data-toggle="modal" data-target=".target"> <i  class="fa fa-map-marker fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
     
       
        <div class="row tb-margin well lr15-margin event-bgc" >
            <div class="event-datebox event-dateboxc text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="pull-left col-sm-9 col-md-9 col-lg-9 col-xs-9 plz">
                    <span class="events-datetext text-center">&nbsp;27<br>NOV</span>
                </div>
                <div class="pull-right col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="events-datetext rotate90">2016</div>
                </div>
            </div>
            <div class="events-datetic full-height col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    <h3 class="ticmargin">ANNUAL GENERAL MEMBERSHIP MEETING</h3>
                    <p><strong class="text-muted">THORNHILL COMMUNITY CENTRE (FIRESIDE LOUNGE)<br>
7755 BAYVIEW AVE,  THORNHILL, ON</strong>
                        <p class="text-primary">2:00PM – 5:OOPM</p>
                    </p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 pull-right narrowsec no-padding col-xs-1">
                    <ul class="no-dec text-center no-decor no-padding">
                        <li>
                            <a href="mailto:gbatoronto@gmail.com?Subject=ANNUAL GENERAL MEMBERSHIP MEETING" class="text-center"><i class="fa fa-2x fa-envelope-o"></i></a>
                        </li>
                        <li>
                            <hr>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="addr" title="7755 BAYVIEW AVE,  THORNHILL, ON" data-toggle="modal" data-target=".target"> <i  class="fa fa-map-marker fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
     
     
       <div class="row tb-margin well lr15-margin event-bgc" >
            <div class="event-datebox text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="pull-left col-sm-9 col-md-9 col-lg-9 col-xs-9 plz">
                    <span class="events-datetext text-center">&nbsp;03<br>DEC</span>
                </div>
                <div class="pull-right col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="events-datetext rotate90">2016</div>
                </div>
            </div>
            <div class="events-datetic full-height col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    <h3 class="ticmargin">SENIORS’ & YOUTH CHRISTMAS BRUNCH</h3>
                    <p><strong class="text-muted">NORTH YORK MEMORIAL COMMUNITY HALL<br>
5110 YONGE STREET NORTH YORK, ON</strong>
                        <p class="text-primary">NOON – 4:00PM</p>
                    </p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 pull-right narrowsec no-padding col-xs-1">
                    <ul class="no-dec text-center no-decor no-padding">
                        <li>
                            <a href="mailto:gbatoronto@gmail.com?Subject=SENIORS & YOUTH CHRISTMAS BRUNCH" class="text-center"><i class="fa fa-2x fa-envelope-o"></i></a>
                        </li>
                        <li>
                            <hr>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="addr" title="NORTH YORK MEMORIAL COMMUNITY HALL 5110 YONGE STREET NORTH YORK, ON" data-toggle="modal" data-target=".target"> <i  class="fa fa-map-marker fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
     
     
    </div>
</div>
@include('templates.partials.footer')
<script src="{{URL::asset('/js/app.js')}}" type="text/javascript"></script>


<script type="text/javascript">
$('.addr').on('click',function() {
     var address=$(this).attr('title');
    $('#gmap').html('<iframe src="https://www.google.com/maps?q=['+address+']&output=embed"  height="100%" frameborder="0" style="border:0" allowfullscreen width="100%"></iframe>');
 
});
</script>
@stop