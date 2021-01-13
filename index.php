<?php

// This file is your starting point (= since it's the index)
// It will contain most of the logic, to prevent making a messy mix in the html

// This line makes PHP behave in a more strict way
declare(strict_types=1);

// We are going to use session variables so we need to enable sessions
session_start();

require 'classes/Product.php';
// Use this function when you need to need an overview of these variables
function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

$product1 = new Product;
$product1->setProduct('Kitty Catnip', 3.75);

$product2 = new Product;
$product2->setProduct('Doggo Bone', 6.00);

$product3 = new Product;
$product3->setProduct('Rolling Stone', 12.30);

$product4 = new Product;
$product4->setProduct('Rolling Stone', 7.90);

$product5 = new Product;
$product5->setProduct('It\'s-a-rock', 33.60);


$products = [ 
    $product1,
    $product2,
    $product3,
    $product4,
    $product5,
];

// var_dump($products[0]->price);

$totalValue = 0;

require 'order.php';