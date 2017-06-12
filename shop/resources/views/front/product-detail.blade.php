@extends('front.template.template-front')
@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- row -->
            <div class="row">
                <div class="column col-xs-12 col-sm-3" id="left_column">
                    <!-- block category -->
                    <div class="block left-module">
                        <p class="title_block"><span class="fa fa-pagelines"></span> PRODUCT</p>

                        <div class="block_content">
                            <!-- layered -->
                            <div class="layered layered-category">
                                <div class="layered-content">
                                    <ul class="tree-menu">
                                        @foreach($categories as $category)
                                            <li
                                            @if($category->id_category == $product->id_category_in_product)
                                                {!!"class='active'"!!}
                                                    @endif
                                            ><span></span><a href="{{route('category',['id'=>$category->id_category,'category'=>$category->name_category])}}">{{$category->name_category}}</a>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- ./layered -->
                        </div>
                    </div>
                </div>
                <!-- ./left colunm -->
                <!-- Center colunm-->
                <div class="center_column col-xs-12 col-sm-9" id="center_column">
                    <!-- Product -->
                    <div id="product">
                        <div class="primary-box row">
                            <div class="pb-left-column col-xs-12 col-sm-6">
                                <!-- product-imge-->
                                <div class="product-image">
                                    <div class="product-full">
                                        <img id="product-zoom" src="upload/images/product/{{$product->images_product}}" width="600px" data-zoom-image="upload/images/product/{{$product->images_product}}"/>
                                    </div>
                                    <div class="product-img-thumb" id="gallery_01">
                                        <ul class="owl-carousel" data-items="3" data-nav="true" data-dots="false"
                                            data-margin="20" data-loop="true">
                                            <li>
                                                <a href="#"
                                                   data-image="upload/images/product/{{$product->images_product}}"
                                                   data-zoom-image="upload/images/product/{{$product->images_product}}">
                                                    <img id="product-zoom"
                                                         src="upload/images/product/{{$product->images_product}}"/>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-imge-->
                            </div>
                            <div class="pb-right-column col-xs-12 col-sm-6">
                                <h1 class="product-name">{{$product->name_vi_product}}</h1>
                                <div class="product-price-group">
                                 <span class="price product-price"><span
                                             style="color: black">Best Price:</span> {{number_format($product->price_product*(100-$product->percent_discount_product)/100)}} VNĐ</span>
                                    <span style="font-weight: bold">Price: </span><span class="old-price"> {{number_format($product->price_product)}}</span>
                                    <span class="discount"> -{{$product->percent_discount_product}}%</span>
                                </div>
                                <div class="info-orther">
                                    <p>Product Code: {{$product->code_product}}</p>

                                    <p>Status: <span class="in-stock">@if($product->status_product == 1)
                                                {{'In-Stock'}}
                                            @else
                                                {{'Out-Stock'}}
                                            @endif</span></p>

                                </div>
                                <div class="product-desc">
                                   <p>{{$product->short_description_product}}</p>
                                </div>
                                <div class="form-option">

                                    <div class="attributes">
                                        <div class="attribute-label">Quantity:</div>
                                        <div class="attribute-list product-qty">
                                            <div class="qty">
                                                <input id="option-product-qty" type="text" value="1">
                                            </div>
                                            <div class="btn-plus">
                                                <a href="#" class="btn-plus-up">
                                                    <i class="fa fa-caret-up"></i>
                                                </a>
                                                <a href="#" class="btn-plus-down">
                                                    <i class="fa fa-caret-down"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-action">
                                    <div class="button-group">
                                        <a class="add-item-to-cart btn-add-cart" title="Add to Cart" href="#"
                                           data-name="Chilly - 500gr"
                                           data-price="70000" data-image="spices/chilli_300x300.png"
                                           data-product-code="CL982">Add to Cart</a>
                                    </div>
                                    <div class="button-group">
                                        <a class="wishlist" href="#"><i class="fa fa-heart-o"></i>
                                            <br>Heart</a>
                                        <a class="compare" href="#"><i class="fa fa-signal"></i>
                                            <br>
                                            Compare</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- tab product -->
                        <div class="product-tab">
                            <ul class="nav-tab" style="margin-bottom: 0px;">
                                <li class="active">
                                    <a aria-expanded="false" data-toggle="tab" href="#product-detail">Detail</a>
                                </li>
                                <li>
                                    <a aria-expanded="true" data-toggle="tab" href="#comment">Comment</a>
                                </li>

                            </ul>
                            <div class="tab-container">
                                <div id="product-detail" class="tab-panel active">
                                   {!! $product->long_description_product !!}
                                </div>
                                <div id="comment" class="tab-panel">
                                    <div class="fb-comments" data-href="https://www.facebook.com/hungdng.92"
                                         data-width="100%" data-numposts="5"></div>
                                </div>
                            </div>
                        </div>
                        <!-- ./tab product -->
                        <!-- box product -->
                        <div class="page-product-box">
                            <h2 class="page-heading">
                                <span class="page-heading-title"> SIMILARITY PRODUCT</span>
                            </h2>
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav="true"
                                data-margin="30" data-autoplayTimeout="1000" data-autoplayHoverPause="true"
                                data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                @foreach($similarProducts as $similarProduct)
                                <li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a><img class="img-responsive" alt="product"
                                                    src="upload/images/product/{{$similarProduct->images_product}}"/></a>

                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view"
                                                   href="upload/images/product/{{$similarProduct->images_product}}"
                                                   class="search fancybox-button"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a class="add-item-to-cart" title="Add to Cart" href="#"
                                                   data-name="Broccoli - 1kg"
                                                   data-price="85000" data-image="broccoli_300x300.jpg"
                                                   data-product-code="BC109">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{{route('product-detail',['id'=>$similarProduct->id_product,'product'=>$similarProduct->name_en_product])}}">{{$similarProduct->name_vi_product}}</a></h5>

                                            <div class="content_price">
                                                <span class="price product-price"><span style="color: black">Price:</span> {{number_format($similarProduct->price_product*(100-$similarProduct->percent_discount_product)/100)}} VNĐ</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                    @endforeach
                            </ul>
                        </div>
                        <!-- ./box product -->
                        <!-- box product -->
                        <div class="page-product-box">
                            <h2 class="page-heading">
                                <span class="page-heading-title">Best Seller</span>
                            </h2>
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav="true"
                                data-margin="30" data-autoplayTimeout="1000" data-autoplayHoverPause="true"
                                data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                @foreach($bestSellerProducts as $bestSellerProduct)
                                <li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a><img class="img-responsive" alt="product"
                                                    src="upload/images/product/{{$bestSellerProduct->images_product}}"/></a>

                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view"
                                                   href="upload/images/product/{{$bestSellerProduct->images_product}}"
                                                   class="search fancybox-button"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a class="add-item-to-cart" title="Add to Cart" href="#"
                                                   data-name="White Rice - 1kg"
                                                   data-price="25000" data-image="ricewhite_300x300.jpg"
                                                   data-product-code="WR109">Add to Cart</a>
                                            </div>
                                            <div class="bestseller"></div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{{route('product-detail',['id'=>$bestSellerProduct->id_product,'product'=>$bestSellerProduct->name_en_product])}}">{{$bestSellerProduct->name_vi_product}}</a></h5>

                                            <div class="content_price">
                                                <span class="price product-price"><span style="color: black">Price:</span> {{number_format($bestSellerProduct->price_product*(100-$bestSellerProduct->percent_discount_product)/100)}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- ./box product -->
                    </div>
                    <!-- Product -->
                </div>
                <!-- ./ Center colunm -->
            </div>
            <!-- ./row-->
        </div>
    </div>
    @endsection
<!-- End Content Section -->
@section('script')
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    @endsection