<?php

require __DIR__ . '/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');

$twig = new Twig_Environment($loader, array(
    'debug' => TRUE,
    'cache' => __DIR__ . '/cache',
));

return $twig;
