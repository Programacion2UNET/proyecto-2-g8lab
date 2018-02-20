<?php
 require_once('./config.php');
 require('./Controllers/View.php');
 $url = $_GET['url'] ?? '/';

 # fast req controller
 switch ($url) {
   case '/':
    $url = './index.html.php';
    break;
  case '/index.php':
    $url = './index.html.php';
    break;
   default: 
    $url = './Views/404.html.php';
    $vars = ['name' => 'demo', 'code' => 404];
    break;
 };

 View::render($url, $vars = []);
?>