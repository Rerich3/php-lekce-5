<?php

class Order
{ public $products;
public  $price;
public $customer;

public function  __construct($products, $price, $customer)
{
    $this->products = $products;
    $this->price = $price;
    $this->customer =$customer;
}
}
$products = ['pracka AEG', 'Zehlicka Zanussi'];
$order = new Order($products, 12000, 'Josef Novak');

print $order ->customer;