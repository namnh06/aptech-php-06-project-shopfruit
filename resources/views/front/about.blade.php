@extends('front.template.template-front')
@section('css')
    <link rel="stylesheet" type="text/css" href="front/css/aboutus.css"/>
    @endsection
@section('slide')
    <div id="home-slider">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 header-top-right">
                    <div class="homeslider">
                        <ul id="contenhomeslider">
                            <li><img alt="Funky roots"
                                     src="front/images/slide/img1.jpg"
                                     title="Funky roots"/></li>
                            <li><img alt="Funky roots"
                                     src="front/images/slide/img2.jpg"
                                     title="Funky roots"/></li>
                            <li><img alt="Funky roots"
                                     src="front/images/slide/img3.jpg"
                                     title="Funky roots"/></li>
                            <li><img alt="Funky roots"
                                     src="front/images/slide/img4.jpg"
                                     title="Funky roots"/></li>
                            <li><img alt="Funky roots"
                                     src="front/images/slide/img5.jpg"
                                     title="Funky roots"/></li>
                            <li><img alt="Funky roots"
                                     src="front/images/slide/img6.jpg"
                                     title="Funky roots"/></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
<!-- end slide section -->
@section('content')
    <div class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="content-container" style="padding-top: 25px">
                        <p style="text-align: center; font-style: italic; color: #009966">Eco Shop is a professional consultancy firm that was set up to address social and environmental issues for businesses located across South East Asia.</p>
                    </div>
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="front/images/aboutus/history.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading"><span class="fa fa-history"></span> HISTORY</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                        Eco Shop was established on July 20, 2014 on the basis of the organic farm located on La Huong farm (Cam Le District, Danang City). In March 2015, Eco Shop officially open the first new store at 999 Le Van Hien Street, Ngu Hanh Son District, Danang City.
                                    </p>
                                </div>
                            </div>
                            <div class="line"></div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="front/images/aboutus/vision.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading"><span class="fa fa-eye"></span> VISSION</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                        Our goal is to become the business model that can be replicated at the <strong>local level</strong> to help maximize the added value of products grown and processed as <strong>organic</strong> and <strong>local farming method</strong>.
                                    </p>
                                </div>
                            </div>
                            <div class="line"></div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="front/images/aboutus/mission.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading"><span class="fa fa-hand-o-up"></span> MISSION</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                        Our mission is to establish and operate the supply chain for <strong>organic products</strong> that produced in Vietnam. Besides, we are try to popularly bring the organic and local farming method and to gradually reduce to no use any chemicals that we can <strong>protect</strong> and develop people and environment.
                                    </p>
                                </div>
                            </div>
                            <div class="line"></div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="front/images/aboutus/corevalue.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading"> <span class="fa fa-heart"></span> CORE VALUE</h4>
                                </div>
                                <div class="timeline-body">
                                    <ol style="list-style: circle">
                                        <li><strong>Honesty</strong> - with myself and in all relationships. This is a prerequisite for building trust.</li>
                                        <li><strong>Love</strong> - Myself, people and Nature.</li>
                                        <li><strong>Responsibility</strong> - to ourselves and society. We always making the commitment.</li>
                                        <li><strong>Saving</strong> - Consumer moderation, moderation and avoiding all wasteful activities.</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="line"></div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="front/images/aboutus/b.philosophy.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading"><span class="fa fa-book"></span> BUSINESS PHILOSOPHY</h4>
                                </div>
                                <div class="timeline-body">
                                    <p style="font-style: italic">“Human knowledge that deviates from the wisdom of God is useless. For God is nature, and nature is God. Serve God by restoring nature!” – Masanobu Fukuoka</p>
                                    <p>To help businesses make Profit without damaging <strong>People</strong> and <strong>Planet</strong> by providing <strong>tailored-made</strong> solutions that are <strong>feasible, viable</strong> and ultimately <strong>sustainable</strong>in the long term.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endsection
<!-- end content section -->
@section('script')

    @endsection