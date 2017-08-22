<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-nav-mar">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-pg-collapsed>
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="first-slide" src="{{URL::asset('/images/gynb1.jpg')}}" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption well">
                            <h1>GIVING BACK</h1>
                            <p>Support the education, social and cultural development of children in Guyana and Canada.</p>
                            <p><a class="btn btn-lg btn-primary" href="{{route('user.gback')}}" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="second-slide" src="{{URL::asset('/images/gynb2.jpg')}}" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption well">
                            <h1>OUR INTENSION</h1>
                            <p>Forge friendships and establish contact with other Guyanese expatriates members can be part of the above worthy vision.</p>
                            <p><a class="btn btn-lg btn-primary" href="{{route('user.about')}}" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="third-slide" src="{{URL::asset('/images/gynb3.jpg')}}" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption well">
                            <h1>BECOME A MEMBER</h1>
                            <p>Initally intended to forge friendships and establish contact with other Guyanese expatriates, members can be part of the above worthy vision, realized throught fundraisers, donations and joining the GBA.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>
        </div>
    </div>
</div>