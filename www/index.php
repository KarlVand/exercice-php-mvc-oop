<?php

$items = array(
array(
    'name' => 'Bananas',
    'amount' => 6,
    'price' => 1.00
),
array(
    'name' => 'Apples',
    'amount' => 3,
    'price' => 1.50
),
array(
    'name' => 'Bottles of wine',
    'amount' => 2,
    'price' => 10.00)
);



function totalPrice()
{
    global $items;
    $stock = array_sum(array_column($items, 'amount'));
    $price = array_sum(array_column($items, 'price'));

    echo ($stock) * ($price);

    $itemStock = array($items, 'amount');
    $itemPrice = array($items, 'price');

    echo $itemStock[0] * $itemPrice[0] + $itemStock[1] * $itemPrice[1] + $itemStock[2] * $itemPrice[2];
    

}

echo totalPrice();




/* $items[0]->name = 'Banana';
$items[0]->price = 1.00;
$items[0]->quantity = 6;

$items[1]->name = 'Apples';
$items[1]->price = 1.50;
$items[1]->quantity = 3;

$items[2]->name = 'Bottles of wine';
$items[2]->price = 10.00;
$items[2]->quantity = 2; */

