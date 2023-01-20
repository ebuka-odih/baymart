@extends('pages.layout.app')
@section('content')

    <div class="container searchWrap">
        <div class="row">
            <form role="search" method="get" id="searchform" action="https://www.constructionkaiser.com/">
                <div>
                    <input type="text" value="" name="s" id="s" placeholder="Search here..." />
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-arrow-right"></i>

                    </button>
                </div>
            </form>
        </div>
    </div>

    <div id="carousel" class="carousel slide carousel-lg" data-ride="carousel">
        <!--<div class="cd">[waiting name="25th Anniversary"]<br /> 25th Anniversary Countdown</div>-->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="wp-content/themes/omatix/img/slide2.jpg" alt="">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-sm-8">
                                <div class="bg-gray">
                                    <h2>Sharing your vision. Building your success.</h2>
                                </div>
                                <br><br>
                                <p><a href="about-us/company-history/index.html" class="btn btn-warning btn-lg">LEARN MORE</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="wp-content/themes/omatix/img/slide3.jpg" alt="">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-sm-8">
                                <div class="bg-gray">
                                    <h2>Building Value With<br /> a Vision</h2>
                                </div>
                                <br><br>
                                <p><a href="about-us/company-history/index.html" class="btn btn-warning btn-lg">LEARN MORE</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="wp-content/themes/omatix/img/slide1.jpg" alt="">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-sm-8">
                                <div class="bg-gray">
                                    <h2>Highest degree of<br /> safety and quality</h2>
                                </div>
                                <br><br>
                                <p><a href="about-us/company-history/index.html" class="btn btn-warning btn-lg">LEARN MORE</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#carousel" data-slide="prev">
            <span class="arrow-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel" data-slide="next">
            <span class="arrow-right"></span>
        </a>
    </div>

    <section class="bg-pattern">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <figure><img src="wp-content/themes/omatix/img/img-industrial.jpg" class="img-responsive"></figure>
                        <div class="thumbnail-caption">
                            <h3>Industrial</h3>
                            <p style="height:130px;">CKL undertakes industrial projects across various sectors all over London, from telecommunications to oil and gas and beyond. </p>
                            <a href="projects/industrial/index.html" class="btn btn-success btn-lg">View Projects</a>                            </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <figure><img src="wp-content/themes/omatix/img/img-commercial.jpg" class="img-responsive"></figure>
                        <div class="thumbnail-caption">
                            <h3>Commercial</h3>
                            <p style="height:130px;">We have worked with the biggest brands all over London to bring to life, across various sectors, commercial developmental projects. </p>
                            <a href="projects/commercial/index.html" class="btn btn-success btn-lg">View Projects</a>                            </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <figure><img src="wp-content/themes/omatix/img/img-03.jpg" class="img-responsive"></figure>
                        <div class="thumbnail-caption">
                            <h3>Residential</h3>
                            <p style="height:130px;">From multi residential estates to single units, executing the most complicated designs, we take pride in our track record of bringing multi-dimensional residential designs to reality. </p>
                            <a href="projects/residential/index.html" class="btn btn-success btn-lg">View Projects</a>                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background-image: url('img/img1.jp')"  id="map" class="bg-01">

        <div class="container">
            <div class="col-sm-6">
                <img height="350" width="450" src="{{ asset('img/img1.jpg') }}" alt="">
            </div>

            <div class="col-sm-6">

                <h3>Construction in London</h3>
                <p>Founded in London, England in June 1993, <strong>Construction Kaiser Limited</strong> is an indigenous building and civil engineering construction company. Starting as a small 5-man organization carrying out minor renovation works, we have grown to become a national force in the London construction industry.
                </p>
                <br>
                <div><a href="about-us/company-history/index.html" class="btn btn-warning btn-lg">LEARN MORE</a></div>
            </div>
        </div>
    </section>


@endsection
