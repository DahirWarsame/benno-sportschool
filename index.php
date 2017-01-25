<?php

// Kickstart the framework
$f3=require('lib/base.php');

$f3->config('config.ini');

// Set our routes

$f3->route('GET /','MainController->main');

$f3->run();