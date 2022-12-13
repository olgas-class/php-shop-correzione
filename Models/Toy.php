<?php
require_once __DIR__ . "/Product.php";

class Toy extends Product {
    public $material;

    function __construct(public string $name, public float $price, public Category $category, $material) {
        parent::__construct($name, $price, $category);
        $this->material = $material;
    }

    public function getDetails() {
        return "name: $this->name; material: $this->material";
    }
}
