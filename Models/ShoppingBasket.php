<?php
class ShoppingBasket {
    private $products = [];

    public function add(Product $product) {
        $this->products[] = $product;
    }

    public function getTotal() {
        // $sum = 0;
        // foreach ($this->products as $product) {
        //     $sum += $product->price;
        // }
        // return $sum;

        $prices = array_map(function ($prod) {
            return $prod->price;
        }, $this->products);
        return array_sum($prices);
    }
}
