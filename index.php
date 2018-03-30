<?php

require __DIR__ . '/autoload.php';

$view = new \App\View();

$view->articles = \App\Models\Article::findAll();
$view['foo'] = 'bar';
$view['baz'] = 42;

echo $view->render(__DIR__ . '/templates/index.php');