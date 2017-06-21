<div class="demo_changer" id="demo_changer">
    <div class="demo-icon fa fa-shopping-cart">
        <span class="notify notify-left"
                {{--id="count-cart"--}}
        >
            @if(Session::has('cart'))
                {{$totalQuantity}}
            @else
                {{0}}
            @endif

        </span>
    </div>
    <div class="form_holder">
        <div class="cart-block">
            <div class="cart-block-content">
                <div class="cart-block-list">
                    <div class="shop_cart">
                        <table class="shop_table">
                            <tbody
                                    {{--id="show-cart"--}}
                            >
                            @if(Session::has('cart'))
                                @foreach($productsCart as $product)
                                    <tr class="cart_item">
                                        <td class="product-remove">
                                            <a href="{{route('get-remove-item',['id'=>$product['item']['id_product']])}}"><div class="bt_remove_product left"
                                                 data-product-code="WN982"></div></a>
                                        </td>
                                        <td class="product-name">
                                            <b>{{$product['item']['name_vi_product']}}</b>
                                            <div class="clr"></div>
                                            <div class="box_quantity left">
                                                <div class="quantity right">
                                                    <a href="{{route('get-reduce-by-one',['id'=>$product['item']['id_product']])}}"><input
                                                            class="bt_minus"
                                                            type="button"
                                                            value="-"
                                                            data-product-code="WN982"></a>
                                                    <input
                                                            type="text"
                                                            disabled=""
                                                            name="product_cart_qty"
                                                            value="{{$product['quantity']}}"
                                                            title="Qty"
                                                            class="input-text qty text product_qty"
                                                            size="4">
                                                    <a href="{{route('get-add-to-cart',['id'=>$product['item']['id_product']])}}"><input
                                                            class="bt_plus"
                                                            type="button"
                                                            value="+"
                                                            data-product-code="WN982"></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product-price"
                                            valign="top"><span
                                                    class="amount">
                                                    @if($product['item']['percent_discount_product'] == 0)
                                                    {{$product['item']['price_product']}}
                                                    @else

                                                    {{$product['item']['price_product']*(100-$product['item']['percent_discount_product'])/100}}
                                                    @endif</span>

                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="toal-cart">
                    <span>Total</span>
                    <span class="toal-price pull-right"
                          {{--id="total_price"--}}
                    >
                        @if(Session::has('cart'))
                            {{$totalPrice}}
                        @else
                            {{0}}
                        @endif
                    </span>
                </div>
                <div class="cart-buttons">
                    <a href="{{route('get-checkout')}}"
                       class="btn-check-out">Payment</a>
                </div>
            </div>
        </div>
    </div>
</div>