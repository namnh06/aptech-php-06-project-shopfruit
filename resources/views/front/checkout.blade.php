@extends('front.template.template-front')
@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- page heading-->
            <h2 class="page-heading">
                <span class="page-heading-title">Check out</span>
            </h2>
            <!-- ../page heading-->
            <div class="page-content page-order">
                <div class="panel-group checkout-page accordion scrollable"
                     id="checkout-page">
                    <form action="{{route('post-checkout')}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <!-- BEGIN PAYMENT ADDRESS -->
                    <div id="payment-address" class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                <a data-toggle="collapse"
                                   data-parent="#checkout-page"
                                   href="#payment-address-content"
                                   class="accordion-toggle">
                                    Step 1: Your Personal Details
                                </a>
                            </h2>
                        </div>
                        <div id="payment-address-content"
                             class="panel-collapse collapse in">
                            <div class="panel-body row">
                                <div class="col-md-6 col-sm-6">

                                    <div class="form-group">
                                        <label for="firstname">First Name <span
                                                    class="require">*</span></label>
                                        <input type="text" id="firstname" name="firstName"
                                               class="input form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">E-Mail <span
                                                    class="require">*</span></label>
                                        <input type="text" id="email"
                                               class="input form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Last Name <span
                                                    class="require">*</span></label>
                                        <input type="text" id="lastname"
                                               class="input form-control" name="lastName">
                                    </div>
                                    <div class="form-group">
                                        <label for="telephone">Telephone <span
                                                    class="require">*</span></label>
                                        <input type="text" id="telephone"
                                               class="input form-control" name="phone">
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address1">Address</label>
                                        <textarea type="text" id="address1"
                                                  class="input form-control" name="address"></textarea>
                                    </div>
                                </div>

                                <hr>
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"
                                                   class="checkbox"> I wish to
                                            subscribe to the Green Fram
                                            newsletter.
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"
                                                   checked="checked"> My
                                            delivery and billing addresses are
                                            the same.
                                        </label>
                                    </div>
                                    <input class="button  pull-left"
                                            type="button"
                                           value="Continue"
                                            data-toggle="collapse"
                                            data-parent="#checkout-page"
                                            data-target="#payment-method-content"
                                            id="button-payment-address">

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAYMENT ADDRESS -->

                    <!-- BEGIN PAYMENT METHOD -->
                    <div id="payment-method" class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                <a data-toggle="collapse"
                                   data-parent="#checkout-page"
                                   href="#payment-method-content"
                                   class="accordion-toggle">
                                    Step 2: Payment Method
                                </a>
                            </h2>
                        </div>
                        <div id="payment-method-content"
                             class="panel-collapse collapse">
                            <div class="panel-body row">
                                <div class="col-md-12">
                                    <p>Please select the preferred payment
                                        method to use on this order.</p>
                                    <div class="radio-list">
                                        <label>
                                            <input type="radio"
                                                   name="payment"
                                                   value="COD"> Cash
                                            On Delivery
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label for="delivery-payment-method">Add
                                            Comments About Your Order</label>
                                        <textarea id="delivery-payment-method"
                                                  rows="8"
                                                  class="input form-control"
                                        name="note"></textarea>
                                    </div>

                                    <div class="checkbox pull-left">
                                        <label>
                                            <input type="checkbox" name="agreement"> I have read
                                            and agree to the <a
                                                    title="Terms & Conditions"
                                                    href="#">Terms &
                                                Conditions </a> &nbsp;&nbsp;&nbsp;
                                        </label>
                                    </div>
                                    <div style="clear: both">
                                        <input class="button pull-left"
                                                type="button"
                                               value="Continue"
                                                id="button-payment-method"
                                                data-toggle="collapse"
                                                data-parent="#checkout-page"
                                                data-target="#confirm-content">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAYMENT METHOD -->

                    <!-- BEGIN CONFIRM -->
                    <div id="confirm" class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                <a data-toggle="collapse"
                                   data-parent="#checkout-page"
                                   href="#confirm-content"
                                   class="accordion-toggle">
                                    Step 3: Confirm Order
                                </a>
                            </h2>
                        </div>
                        <div id="confirm-content"
                             class="panel-collapse collapse">
                            <div class="panel-body row">
                                <div class="col-md-12 clearfix">
                                    <div class="table-wrapper-responsive">
                                        <table class="table table-bordered table-responsive cart_summary">
                                            <thead>
                                            <tr>
                                                <th class="cart_product">
                                                    Product
                                                </th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Unit price</th>
                                                <th>Qty</th>
                                                <th>Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(Session::has('cart'))
                                                @foreach($productsCart as $product)
                                                    <tr>
                                                        <td class="cart_product">
                                                            <a
                                                                    href="#"><img
                                                                        src="upload/images/product/{{$product['item']['image_product']}}"
                                                                        alt="Product"></a>
                                                        </td>
                                                        <td class="cart_description">
                                                            <p
                                                                    class="product-name">
                                                                <a href="#">{{$product['item']['name_vi_product']}}</a>
                                                            </p>
                                                            <small class="cart_ref">
                                                                Product Code :
                                                                {{$product['item']['code_product']}}
                                                            </small>
                                                            <br></td>
                                                        <td class="cart_avail"><span
                                                                    class="label label-success"> @if($product['item']['status_product'] == 1)
                                                                    {{'In-Stock'}}
                                                                @else
                                                                    {{'Out-Stock'}}
                                                                @endif</span>
                                                        </td>
                                                        <td class="price"><span
                                                                    style="color: #e84d1c; font-size: 18px; font-weight: bold;"> @if($product['item']['percent_discount_product'] == 0)
                                                                    {{number_format($product['item']['price_product'])}}

                                                                @else
                                                                    {{number_format($product['item']['price_product']*(100-$product['item']['percent_discount_product'])/100)}}
                                                                @endif</span>
                                                        </td>
                                                        <td class="qty">
                                                            <label>{{$product['quantity']}}</label>
                                                        </td>
                                                        <td class="price"><span
                                                                    style="color: #e84d1c; font-size: 18px; font-weight: bold;">{{number_format($product['price'])}}</span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td colspan="2"
                                                    rowspan="3"></td>
                                                <td colspan="3"><strong>Total(tax
                                                        incl.)</strong></td>
                                                <td colspan="2"
                                                    style="font-weight: bold; color: #e84d1c; font-size: 20px;">
                                                    @if(Session::has('cart'))
                                                        {{number_format($totalPrice)}}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>

                                                <td colspan="3">
                                                    <strong>Voucher</strong>
                                                </td>
                                                <td colspan="2">
                                                    <input style="font-weight: normal; letter-spacing: 3px;"
                                                           class="input form-control"
                                                           placeholder="Voucher....">
                                                </td>
                                            </tr>
                                            <tr>

                                                <td colspan="3">
                                                    <strong>Total</strong></td>
                                                <td colspan="2"

                                                    style="font-weight: bold; color: #e84d1c; font-size: 20px;">
                                                    @if(Session::has('cart'))
                                                        {{number_format($totalPrice)}}
                                                    @endif
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="clearfix"></div>
                                    <button class="button pull-right"
                                            type="submit" id="button-confirm">
                                        Confirm Order
                                    </button>
                                    <button type="button"
                                            id="btn-remove-all-item"
                                            class="button-cancel pull-right margin-right-20">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END CONFIRM -->
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection