<?php

$loader = require __DIR__ . '/../vendor/autoload.php';
$loader->addPsr4("Bez\\TweetToHtml\\Tests\\", __DIR__ . "/Tests");

assert(true === class_exists("\\Bez\\TweetToHtml\\TweetFormatter"));

