<?php

require_once __DIR__ . "/Category.php";

class Product {
    function __construct(public string $name, public float $price, public Category $category) {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    public function getDetails() {
        return "name: $this->name";
    }
}
