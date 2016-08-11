<?php

$twig = require "twig.php";

$products = [

    [
        'name' => 'Yellow T-shirt',
        'price' => '£10.99'
    ],
    [
        'name' => 'Blue jeans',
        'price' => '£5.99',
        'sale_price' => '£2.99'
    ],
    [
        'name' => 'Disco hot pants',
        'price' => '£2.99'
    ]
];

echo $twig->render('loops.twig', ['products' => $products]);
