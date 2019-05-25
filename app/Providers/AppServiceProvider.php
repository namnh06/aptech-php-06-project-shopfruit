<?php

namespace App\Providers;

use App\Cart;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use View;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
		Schema::defaultStringLength(191);
		View::composer(['front.index-front','front.shopping-cart','front.checkout'],function($view){
			if(Session('cart')){
				$oldCart = Session::get('cart');
				$cart = new Cart($oldCart);
				$view->with(['cart'=>Session::get('cart'),'productsCart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQuantity'=>$cart->totalQuantity]);
			}
		});
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
