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
$order1 = new Order($products, 12000, 'Josef Novak');

print $order1 ->customer;
print $order1->products[0,1]
foreach ($order1->products as $item){
    echo $item;
    echo '<br>';
}
//chceme znizit objednavku o 100kc

//$novaCena = $order->price;
//$snizenaCena = $novaCena - 100;
//$order->price= $snizenaCena;

//zapisanie tohto na 1 riadok

$order1 ->price = $order1->price - 100;