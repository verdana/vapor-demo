<?php
declare (strict_types = 1);

$vapor = new Vapor('views', 'php');
$vapor->addFolder('layout', __DIR__ . '/views/layout');
$vapor->addFolder('shared', __DIR__ . '/views/shared');
$vapor->setExtension('php');
// $vapor->loadExtensions('functions.php');

require_once 'functions.php';

echo $vapor->render('home', [
    'title'  => 'vapor template engine',
    'author' => 'verdana mu',
    'email'  => 'verdana.cn@gmail.com',
    'github' => 'https: //github.com/verdana/vapor.git',
]);

$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
printf("\n<div class=\"time\">%.05f seconds</div>\n", $time);
