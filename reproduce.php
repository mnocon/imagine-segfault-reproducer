<?php

require_once __DIR__ . '/vendor/autoload.php';

$filePath = "Example.jpg";

$imagine = new Imagine\Gd\Imagine();
$image = $imagine->open($filePath);


echo "Success!";
