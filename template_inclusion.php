<?php

$twig = require "twig.php";

$siteName = 'Inviqa Blog';

echo $twig->render('template_inclusion.twig', ['siteName' => $siteName]);
