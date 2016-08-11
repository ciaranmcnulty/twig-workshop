<?php

$twig = require "twig.php";

$companyName = "Inviqa & Co";

echo $twig->render('escaping.twig', [ 'companyName' => $companyName ]);
