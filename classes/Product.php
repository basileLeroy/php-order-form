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