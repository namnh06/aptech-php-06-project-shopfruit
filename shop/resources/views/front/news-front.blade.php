@extends('front.template.template-front')
@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- row -->
            <div class="row">
                <!-- Left colunm -->
                <div class="column col-xs-12 col-sm-3" id="left_column">
                    <!-- block category -->
                    <div class="block left-module">
                        <p class="title_block"><span class="fa fa-list"></span> CATEGORIES</p>

                        <div class="block_content">
                            <!-- layered -->
                            <div class="layered layered-category">
                                <div class="layered-content">
                                    <ul class="tree-menu">
                                        @foreach($categoriesNews as $categoryNewsList)
                                            <li   @if($news->categoryNews->name_category_news == $categoryNewsList->name_category_news)
                                                {!!"class='active'"!!}
                                                    @endif
                                            ><span></span><a href="{{route('category-news',['id'=>$categoryNewsList->id_category_news,'categoryNews'=>$categoryNewsList->name_category_news])}}">{{$categoryNewsList->name_category_news}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- ./layered -->
                        </div>
                    </div>
                    <!-- ./block category  -->
                    <!-- block video -->
                    <div class="block left-module">
                        <p class="title_block"><span class="fa fa-video-camera"></span>  VIDEOS</p>

                        <div class="block_content">
                            <iframe width="255" height="300" src="https://www.youtube.com/embed/oFuC0URYKqU" frameborder="0"
                                    allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <!-- ./block video  -->

                    <!-- block image -->
                    <div class="block left-module">
                        <p class="title_block"><span class="fa fa-camera"></span>  GALLERIES</p>
                        <div class="block_content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="box-right">
                                        <ul class="product-list">
                                            <li class="col-sm-6">
                                                <div class="left-block" style="padding: 5px 5px 5px 5px">
                                                    <a><img class="img-responsive" alt="product" style="border-radius: 15%"
                                                            src="images/news/news1_300x300.jpg"/></a>
                                                    <div class="quick-view">
                                                        <a title="Zoom In" href="images/news/news1.jpg" class="search fancybox-button"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-6">
                                                <div class="left-block" style="padding: 5px 5px 5px 5px">
                                                    <a><img class="img-responsive" alt="product"style="border-radius: 15%"
                                                            src="images/news/news2_300x300.jpg"/></a>
                                                    <div class="quick-view">
                                                        <a title="Zoom In" href="images/news/news2.jpg" class="search fancybox-button"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-6">
                                                <div class="left-block" style="padding: 5px 5px 5px 5px">
                                                    <a><img class="img-responsive" alt="product"
                                                            src="images/news/news3_300x300.jpg"/></a>
                                                    <div class="quick-view">
                                                        <a title="Zoom In" href="images/news/news3.jpg" class="search fancybox-button"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-6">
                                                <div class="left-block" style="padding: 5px 5px 5px 5px">
                                                    <a><img class="img-responsive" alt="product" style="border-radius: 15%"
                                                            src="images/news/news4_300x300.jpg"/></a>
                                                    <div class="quick-view">
                                                        <a title="Zoom In" href="images/news/news4.jpg" class="search fancybox-button"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-6">
                                                <div class="left-block" style="padding: 5px 5px 5px 5px">
                                                    <a><img class="img-responsive" alt="product" style="border-radius: 15%"
                                                            src="images/news/news5_300x300.jpg"/></a>
                                                    <div class="quick-view">
                                                        <a title="Zoom In" href="images/news/news5.jpg" class="search fancybox-button"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-6">
                                                <div class="left-block" style="padding: 5px 5px 5px 5px">
                                                    <a><img class="img-responsive" alt="product" style="border-radius: 15%"
                                                            src="images/news/news6_300x300.jpg"/></a>
                                                    <div class="quick-view">
                                                        <a title="Zoom In" href="images/news/news6.jpg" class="search fancybox-button"></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./block image  -->
                </div>

                <!-- Center colunm-->
                <div class="center_column col-xs-12 col-sm-9" id="center_column">
                    <!-- page heading-->
                    <div class="page-heading">
                        <h2>
                            <span class="page-heading-title"><span class="fa fa-paperclip"></span> {{$news->title_vi_news}}  </span>
                        </h2>
                    </div>

                    <div class="entry-meta-data" style="float: right; padding-top: 10px; padding-bottom: 10px">
                                            <span class="author">
                                            <i class="fa fa-user"></i>
                                            by: <a href="#"> {{$news->user->name_user}}</a></span>
                        <span class="date"><i class="fa fa-calendar"></i> {{$news->created_at}} </span>
                    </div>

                    <div style="padding-top: 50px">
                       {!! $news->content_news !!}
                    </div>



                </div>
                <!-- ./ Center colunm -->
            </div>
            <!-- ./row-->
        </div>
    </div>
    @endsection