<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" /> 
  <!-- here localtion view controller helper -->
  <script type="application/javascript" src="/assets/scripts/location.js"></script> 
  <title>Proyecto 2 - Programacion 2 - UNET</title>
  <link rel="stylesheet" href="/assets/css/main.css" />
</head>
<?php
//  require_once('./config.php');
 require('./Controllers/View.php');
 require('./Controllers/Db.php');
 
 $db = new Db([
   'dbName' => 'demo',
   'host' => '0.0.0.0',
   'port' => 3306,
   'user' => 'root',
   'password' => false
  ]);

  $db->connect();

 $url = $_GET['url'] ?? '/';

 echo $url;
 # fast req controller,ugly way
 switch ($url) {
   case '/':
    $url = './index.html.php';
    View::render($url, $vars = []);
    break;
  case '/index.php':
    $url = './index.html.php';
    View::render($url, $vars = []);
    break;
  case 'login.php': 
    $url = './Views/Login.html.php';
    View::render($url, $vars = []);
    break;
  case 'signup.php':
    $url = './Views/Signup.html.php';
    View::render($url, $vars = []);
    break;
   default: 
    $url = './Views/404.html.php';
    $vars = ['name' => 'demo', 'code' => 404];
    View::render($url, $vars);
    break;
 };
?>
</html>