@extends('front.template.template-front')
{{--@section('slide')--}}
{{--<div id="home-slider">--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-sm-12 header-top-right">--}}
{{--<div class="homeslider">--}}
{{--<ul id="contenhomeslider">--}}
{{--<li><img alt="Funky roots"--}}
{{--src="front/images/slide/img1.jpg"--}}
{{--title="Funky roots"/></li>--}}
{{--<li><img alt="Funky roots"--}}
{{--src="front/images/slide/img2.jpg"--}}
{{--title="Funky roots"/></li>--}}
{{--<li><img alt="Funky roots"--}}
{{--src="front/images/slide/img3.jpg"--}}
{{--title="Funky roots"/></li>--}}
{{--<li><img alt="Funky roots"--}}
{{--src="front/images/slide/img4.jpg"--}}
{{--title="Funky roots"/></li>--}}
{{--<li><img alt="Funky roots"--}}
{{--src="front/images/slide/img5.jpg"--}}
{{--title="Funky roots"/></li>--}}
{{--<li><img alt="Funky roots"--}}
{{--src="front/images/slide/img6.jpg"--}}
{{--title="Funky roots"/></li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endsection--}}

@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- page heading-->
            <h2 class="page-heading">
                <span class="page-heading-title">Shopping Cart</span>
            </h2>
            <!-- ../page heading-->
            <div class="page-content page-order">

                <div class="heading-counter warning"><span
                            class="fa fa-shopping-cart"></span> Your shopping
                    cart contains:
                    <span
                            {{--id="count-cart"--}}
                            style="font-weight: bold">
                        @if(Session::has('cart'))
                            {{$totalQuantity}}
                        @else
                            {{0}}
                        @endif
                    </span> <span> Products</span>
                </div>
                <div class="order-detail-content">
                    <table class="table table-bordered table-responsive cart_summary">
                        <thead>
                        <tr>
                            <th class="cart_product">Product</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Unit price</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th class="action"><i class="fa fa-trash-o"></i>
                            </th>
                        </tr>
                        </thead>
                        <tbody
                                {{--id="show-item-cart"--}}
                        >
                        @if(Session::has('cart'))
                            @foreach($productsCart as $product)
                                <tr>
                                    <td class="cart_product"><a href="#"><img
                                                    src="upload/images/product/{{$product['item']['image_product']}}"
                                                    alt="Product"></a></td>
                                    <td class="cart_description"><p
                                                class="product-name"><a
                                                    href="#">{{$product['item']['name_vi_product']}}</a></p>
                                        <small class="cart_ref">Product Code :
                                            {{$product['item']['code_product']}}
                                        </small>
                                        <br></td>
                                    <td class="cart_avail"><span
                                                class="label label-success">
                                            @if($product['item']['status_product'] == 1)
                                            {{'In-Stock'}}
                                        @else
                                        {{'Out-Stock'}}
                                        @endif
                                        </span>
                                    </td>
                                    <td class="price"><span
                                                style="color: #e84d1c; font-size: 18px; font-weight: bold;">
                                            @if($product['item']['percent_discount_product'] == 0)
                                                {{number_format($product['item']['price_product'])}}

                                                @else
                                            {{number_format($product['item']['price_product']*(100-$product['item']['percent_discount_product'])/100)}}
                                                @endif

                                        </span>
                                    </td>
                                    <td class="qty">
                                        <input
                                                class="form-control input-sm"
                                                type="text" readonly=""
                                                value="{{$product['quantity']}}">
                                        <a class="plus" data-product-code="SP109" href="{{route('get-add-to-cart',['id'=>$product['item']['id_product']])}}">
                                            <i class="fa fa-caret-up"></i>
                                        </a>
                                        <a href="{{route('get-reduce-by-one',['id'=>$product['item']['id_product']])}}" class="minus"
                                                data-product-code="SP109"><i
                                                    class="fa fa-caret-down"></i></a>
                                    </td>
                                    <td class="price"><span
                                                style="color: #e84d1c; font-size: 18px; font-weight: bold;">
                                        {{number_format($product['price'])}}
                                        </span>
                                    </td>
                                    <td class="action"><a href="{{route('get-remove-item',['id'=>$product['item']['id_product']])}}" class="remove_product"
                                                          data-product-code="SP109">Delete
                                            item</a></td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="2" rowspan="1"></td>
                            <td colspan="3"><strong>Total(tax incl.)</strong>
                            </td>
                            <td colspan="1"
                                {{--id="total_price"--}}
                                style="font-weight: bold; color: #e84d1c; font-size: 20px;">
                                @if(Session::has('cart'))
                                {{number_format($totalPrice)}}
                                    @endif
                            </td>
                            <td></td>
                        </tr>
                        </tfoot>
                    </table>
                    <div class="cart_navigation">
                        <a class="prev-btn" href="{{route('index')}}">Continue
                            shopping</a>
                        <a class="next-btn" href="{{route('get-checkout')}}">Proceed to
                            checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection