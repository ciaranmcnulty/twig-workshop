<?php

$twig = require "twig.php";

$item1 = [
    'foo' => [
        'bar' => 'This is the first value'
    ]
];

$item2 = new stdClass;
$item2->foo = new stdClass;
$item2->foo->bar = 'This is the second value';

echo $twig->render('variables.twig', ['item1' => $item1, 'item2' => $item2]);
