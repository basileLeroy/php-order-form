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

// TODO: provide some Products (you may overwrite the example)
// $Products = [
//     ['name' => 'Kitty Catnip', 'price' => 3.75],
//     ['name' => 'Doggo Bone', 'price' => 6.00],
//     ['name' => 'Rolling Stone', 'price' => 12.30],
//     ['name' => 'Flappy bored', 'price' => 7.90],
//     ['name' => 'It\'s-a-rock', 'price' => 33.60],
// ];

$product = new Product;
$product->name = 'tiger';
$product->price = 9001;

var_dump($product);





$totalValue = 0;

require 'order.php';