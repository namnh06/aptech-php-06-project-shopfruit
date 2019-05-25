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
                        <p class="title_block"><span class="fa fa-pagelines"></span> PRODUCT</p>
                        <div class="block_content">
                            <!-- layered -->
                            <div class="layered layered-category">
                                <div class="layered-content">
                                    <ul class="tree-menu">

                                        @foreach($categories as $category)
                                        <li
                                        @if($category->name_category == $categoryDetail->name_category)
                                            {!!"class='active'"!!}
                                            @endif
                                        ><span></span><a href="{{route('category',['id'=>$category->id_category,'category'=>$category->name_category])}}">{{$category->name_category}}</a>
                                            @endforeach
                                        </li>
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
                    <!-- page heading-->
                    <h2 class="page-heading">
                        <span class="page-heading-title">{{$categoryDetail->name_category}}</span>
                    </h2>
                    <!-- ../page heading-->
                    <!-- Product -->
                    <div id="product">
                        <!-- box product -->
                        <div class="category-featured Vegetables">
                            <div class="product-featured clearfix">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="box-right">
                                            <!--&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;-->
                                            <ul class="product-list">
                                                @foreach($productsCategory as $product)
                                                <li class="col-sm-4 product-item" style="width: 280px;">

                                                    <div class="left-block">
                                                        <a><img class="img-responsive" alt="product"
                                                                src="upload/images/product/{{$product->avatar_product}}"/></a>

                                                        <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" href="upload/images/product/{{$product->image_product}}" class="search fancybox-button"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a class="add-item-to-cart" title="Add to Cart" href="#" data-name="Black Beans - 1kg"
                                                               data-price="31500" data-image="beans/blackbeans_300x300" data-product-code="BB0927">Add to Cart</a>
                                                        </div>
                                                        <div class="price-percent-reduction2">
                                                            -{{$product->percent_discount_product}}% OFF
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="{{route('product-detail',['id'=>$product->id_product,'product'=>$product->name_en_product])}}">{{$product->name_vi_product}}</a></h5>

                                                        <div class="content_price">
                                    <span class="price product-price"><span
                                                style="color: orangered">Best Price:</span> {{number_format($product->price_product*(100-$product->percent_discount_product)/100)}} VNĐ</span>
                                                            <!--<br><span style="color: black">Price:</span>-->
                                                            <!--<span class="price old-price">45,000đ</span>-->
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
                        <!-- ./box product -->
                    </div>
                    <!-- Product -->
                    <div class="sortPagiBar">
                        <div class="bottom-pagination">
                            <nav>
                                {{$productsCategory->links()}}
                            </nav>
                        </div>
                        <div class="show-product-item">
                            <select name="">
                                <option value="">Show 9</option>
                                <option value="">Show 18</option>
                                <option value="">Show 27</option>
                                <option value="">Show 36</option>
                            </select>
                        </div>
                        <div class="sort-product">
                            <select>
                                <option value="">Product Name</option>
                                <option value="">Price</option>
                            </select>

                            <div class="sort-product-icon">
                                <i class="fa fa-sort-alpha-asc"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./ Center colunm -->
            </div>
            <!-- ./row-->
        </div>
    </div>
    @endsection