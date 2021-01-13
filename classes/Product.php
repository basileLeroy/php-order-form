<?php

class Product {

    var $name;
    var $price;

    function setProduct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;

    }

    function showAttributes()
    {
        echo 'Product: ' . $this->name;
        echo '<br>';
        echo 'Price: ' . $this->price;
    }
}


// $cat = new Product;
// $cat->setProduct('Kitty Catnip', 3.75);

// $dog = new Product;



// $Products = [

// new Product (name:'Kitty Catnip', price: '1500'),
// new Product (name:'Doggo Bone', price: '1500'),
// new Product (name:'Rolling Stone', price: '1500'),
// new Product (name:'It\'s-a-rock', price: '1500'),
// ];