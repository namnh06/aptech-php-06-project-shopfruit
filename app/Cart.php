<?php

namespace App;

class Cart
{
	public $items = null;
	public $totalQuantity = 0;
	public $totalPrice = 0;

	function __construct($oldCart)
	{
		if ($oldCart) {
			$this->items = $oldCart->items;
			$this->totalQuantity = $oldCart->totalQuantity;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	function addToCart($item, $id)
	{
		$cart = ['quantity' => 0, 'price' => $item->price_product, 'item' => $item];

		if ($this->items) {
			if (array_key_exists($id, $this->items)) {
				$cart = $this->items[$id];
			}
		}

		$cart['quantity']++;
		if ($item->percent_discount_product == 0) {
			$cart['price'] = $item->price_product * $cart['quantity'];
		} else {
			$cart['price'] = ($item->price_product * (100 - $item->percent_discount_product) / 100) * $cart['quantity'];
		}

		$this->items[$id] = $cart;
		$this->totalQuantity++;
		if ($item->percent_discount_product == 0) {
			$this->totalPrice += $item->price_product;
		} else {
			$this->totalPrice += $item->price_product * (100 - $item->percent_discount_product) / 100;
		}
	}

	function removeItem($id)
	{
		$this->totalQuantity -= $this->items[$id]['quantity'];
		$this->totalPrice -= $this->items[$id]['price'];
		unset($this->items[$id]);
	}

	function reduceByOne($id)
	{
		$this->items[$id]['quantity']--;
		if ($this->items[$id]['quantity'] <= 0) {
			$this->totalQuantity--;
			$this->totalPrice -= $this->items[$id]['price'];
			unset($this->items[$id]);
			$this->totalQuantity--;
			$this->totalPrice -= $this->items[$id]['price'];
		} else {
			if ($this->items[$id]['item']['percent_discount_product'] == 0) {
				$this->items[$id]['price'] -= $this->items[$id]['item']['price_product'];
				$this->totalQuantity--;
				$this->totalPrice -= $this->items[$id]['item']['price_product'];
			} else {
				$this->items[$id]['price'] -= $this->items[$id]['item']['price_product'] * (100 - $this->items[$id]['item']['percent_discount_product']) / 100;
				$this->totalQuantity--;
				$this->totalPrice -= $this->items[$id]['item']['price_product'] * (100 - $this->items[$id]['item']['percent_discount_product']) / 100;
			}

		}
	}


}

