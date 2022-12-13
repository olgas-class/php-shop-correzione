<?php
require_once __DIR__ . "/../Models/Category.php";
require_once __DIR__ . "/../Models/Food.php";
require_once __DIR__ . "/../Models/Toy.php";

$gatto = new Category("gatto");
$cane = new Category("cane");

$crochette = new Food("crocchette", 5.55, $gatto, 500);
$topo = new Toy("topo", 10, $gatto, "peluche");
$osso = new Toy("osso da masticare", 15, $cane, "gomma");

$products = [
    $crochette,
    $topo,
    $osso
];
