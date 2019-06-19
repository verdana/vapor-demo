<?php
declare (strict_types = 1);

use Vapor\Engine;
use Vapor\Template;

$vapor = new Engine('views');
$vapor->addFolder('layout', 'views/layout');
$vapor->addFolder('shared', 'views/shared');
$vapor->setFileExtension('php');
// $vapor->loadExtensions('functions.php');

require_once 'functions.php';

$data = [
    'name'   => 'vapor',
    'title'  => 'vapor template engine',
    'author' => 'verdana mu',
    'email'  => 'verdana.cn@gmail.com',
    'github' => 'https://github.com/verdana/vapor.git',
];

// echo $vapor->render('home', $data);
echo $vapor->make('home')->render($data);

$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
printf("\n<div class=\"time\">%.05f seconds</div>\n", $time);
