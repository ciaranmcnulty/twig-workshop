<?php

$twig = require "twig.php";

$books = [
    [
        'title' => 'Pride and Prejudice',
        'author' => 'Jane Austen',
    ],
    [
        'title' =>'Beowulf'
    ],
    [
        'title' => 'Frankenstein',
        'author' => 'Mary Shelley',
    ]
];

echo $twig->render('filters.twig', ['books' => $books]);
