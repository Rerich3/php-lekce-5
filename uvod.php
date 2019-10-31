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
public function productCount(){
    return count($this->$products);}
    public function productCount()
    {echo count($this->$products);
    }

//$products = ['pracka AEG', 'Zehlicka Zanussi'];
$order = new Order(['pracka AEG', 'Zehlicka Zanussi'], 12000, 'Josef Novak');

echo $order->productCount();

print $order ->customer;
foreach ($order->products as $item){
    echo $item;
    echo '<br>';
}
//chceme znizit objednavku o 100kc

//$novaCena = $order->price;
//$snizenaCena = $novaCena - 100;
//$order->price= $snizenaCena;

//zapisanie tohto na 1 riadok

$order ->price = $order->price - 100;