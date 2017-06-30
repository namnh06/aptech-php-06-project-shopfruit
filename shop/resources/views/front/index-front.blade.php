@extends('front.template.template-front')
@section('css')

@endsection
@section('side-cart')
    @include('front.template.side-cart-front')
@endsection
@section('slide')
    <!-- Home slideder-->
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
    <!-- END Home slideder-->
@endsection
<!--End Section Slide-->
@section('content')
    <div class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <h2 class="page-heading">
                        <span class="page-heading-title"><img alt="fashion"
                                                              src="front/images/commerce-tag.png"/> PROMOTION</span>
                    </h2>

                    <div class="latest-deals-product">
                        <ul class="product-list owl-carousel" data-dots="false"
                            data-loop="true" data-nav="true"
                            data-margin="10" data-autoplayTimeout="1000"
                            data-autoplayHoverPause="true"
                            data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                            @foreach($promotionProducts as $promotionProduct)
                                <li>
                                    <div class="left-block">
                                        <a><img class="img-responsive"
                                                alt="product"
                                                src="upload/images/product/{{$promotionProduct->avatar_product}}"
                                                width="300px"/></a>
                                        <div class="quick-view">
                                            <a title="Add to my wishlist"
                                               class="heart" href="front/#"></a>
                                            <a title="Add to compare"
                                               class="compare"
                                               href="front/#"></a>
                                            <a title="Quick view"
                                               href="upload/images/product/{{$promotionProduct->image_product}}"
                                               class="search fancybox-button"></a>
                                        </div>
                                        <div class="add-to-cart">
                                            <a
                                                    {{--class="add-item-to-cart"--}}
                                                    {{--class="ajaxCart"--}}
                                                    title="Add to Cart"
                                                    href="{{route('get-add-to-cart',['id'=>$promotionProduct->id_product])}}"
                                                    data-name="Asparagus - 1kg"
                                                    data-price="38500"
                                                    data-image="vegetables/asparagus_300x300.jpg"
                                                    data-product-code="AS109">Add
                                                to
                                                Cart</a>
                                        </div>
                                        <div class="price-percent-reduction2">
                                            -{{$promotionProduct->percent_discount_product}}
                                            % OFF
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a
                                                    href="{{route('product-detail',['id'=>$promotionProduct->id_product,'product'=>$promotionProduct->name_en_product])}}">{{$promotionProduct->name_vi_product}}</a>
                                        </h5>

                                        <div class="content_price">
                                    <span class="price product-price ">
                                        <span style="color: orangered">Best Price:</span> {{number_format($promotionProduct->price_product*(100-$promotionProduct->percent_discount_product)/100)}}
                                        VNĐ</span>
                                            <br><span style="color: black">Price:</span>
                                            <span class="price old-price"> {{number_format($promotionProduct->price_product)}}
                                                VNĐ</span>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-page">
        <div class="container">
            <!-- featured category  -->
            <div class="category-featured Vegetables">
                <nav class="navbar nav-menu show-brand">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-brand "><a href="front/#"> <img
                                        alt="fashion"
                                        src="front/images/icon_like.png"/> Best
                                Seller</a></div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse">

                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->

                </nav>
                <div class="product-featured clearfix">
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="box-right">
                                <!--&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;-->
                                <ul class="product-list">
                                    @foreach($bestSellerProducts as $bestSellerProduct)
                                        <li class="col-sm-4 product-item">
                                            <div class="left-block">
                                                <a><img class="img-responsive"
                                                        alt="product"
                                                        src="upload/images/product/{{$bestSellerProduct->avatar_product}}"/></a>

                                                <div class="quick-view">
                                                    <a title="Add to my wishlist"
                                                       class="heart"
                                                       href="front/#"></a>
                                                    <a title="Add to compare"
                                                       class="compare"
                                                       href="front/#"></a>
                                                    <a title="Quick view"
                                                       href="upload/images/product/{{$bestSellerProduct->image_product}}"
                                                       class="search fancybox-button"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a
                                                            {{--class="add-item-to-cart" --}}
                                                            {{--class="ajaxCart"--}}
                                                            title="Add to Cart"
                                                            href="{{route('get-add-to-cart',['id'=>$bestSellerProduct->id_product])}}"
                                                            data-name="Spinach - 1kg"
                                                            data-price="55000"
                                                            data-image="vegetables/spinach_300x300.jpg"
                                                            data-product-code="SP109">Add
                                                        to Cart</a>
                                                </div>
                                                <div class="bestseller"></div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a
                                                            href="{{route('product-detail',['id'=>$bestSellerProduct->id_product,'product'=>$bestSellerProduct->name_en_product])}}">{{$bestSellerProduct->name_vi_product}}</a>
                                                </h5>

                                                <div class="content_price">
                                                    <span class="price product-price "><span
                                                                style="color: black">Price:</span> {{ number_format($bestSellerProduct->price_product)}}
                                                        VNĐ</span>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end featured category -->


            <div class="category-featured Vegetables">
                <nav class="navbar nav-menu show-brand">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-brand"><a href="front/#"> <img
                                        alt="fashion"
                                        src="front/images/icon_paper-plane.png"/>
                                Coming Soon </a></div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse">

                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->

                </nav>
                <div class="product-featured clearfix">
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="box-right">
                                <ul class="product-list">
                                    @foreach($comingProducts as $comingProduct)
                                        <li class="col-sm-4 product-item">
                                            <div class="left-block">
                                                <a><img class="img-responsive"
                                                        alt="product"
                                                        src="upload/images/product/{{$comingProduct->avatar_product}}"/></a>

                                                <div class="quick-view">
                                                    <a title="Add to my wishlist"
                                                       class="heart"
                                                       href="front/#"></a>
                                                    <a title="Add to compare"
                                                       class="compare"
                                                       href="front/#"></a>
                                                    <a title="Quick view"
                                                       href="upload/images/product/{{$comingProduct->image_product}}"
                                                       class="search fancybox-button"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a class="not-active"
                                                       title="Add to Cart"
                                                       readonly="true">Add to
                                                        Cart</a>
                                                </div>
                                                <div class="comingsoon"></div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a
                                                            href="{{route('product-detail',['id'=>$comingProduct->id_product,'product'=>$comingProduct->name_en_product])}}">{{$comingProduct->name_vi_product}}</a>
                                                </h5>

                                                <div class="content_price">
                                                    <span class="price product-price"><span
                                                                style="color: black">Price:</span> {{number_format($comingProduct->price_product)}}
                                                        VNĐ</span>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end featured category -->
        </div>
    </div>
@endsection
{{--@section('script')--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
    {{--<script>--}}
        {{--$(document).ready(function () {--}}
            {{--$('.ajaxCart').click(function () {--}}
                {{--$.get('front/ajax/cart-ajax', function (data) {--}}
                        {{--$('#gee').html(data);--}}
                {{--});--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
{{--@endsection--}}