<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" /> 
  <!-- here localtion view controller helper -->
  <script type="application/javascript" src="/assets/scripts/location.js"></script> 
  <title>Proyecto 2 - Programacion 2 - UNET (TournametsTournamets)</title>
  <link rel="stylesheet" href="/assets/css/main.css" />
  <link rel="stylesheet" href="/assets/css/index.css" />
  <!-- <link href="https://fonts.googleapis.com/css?family=Mukta+Malar|Roboto" rel="stylesheet" /> -->
  <link rel="stylesheet" href="assets/css/normalize.css" />
</head>
<?php
 session_start();
 require('./Controllers/View.php');
 require('./Controllers/Db.php');
 require('./Controllers/Session.php');

  $session = new Session();
  $db = new Db([
   'dbName' => 'proyecto-progra',
   'host' => '0.0.0.0',
   'port' => 3306,
   'user' => 'root',
   'password' => false
  ]);

  $db->connect();

  $url = $_GET['url'] ?? '/';
  $url = "$_SERVER[REQUEST_METHOD] $url";

 # fast req controller,ugly way
 switch ($url) {
  case 'GET /':
    View::render('./index.html.php', [
      'auth' => $session->isAuth()
    ]);
    break;
  case 'GET /index.php':
    View::render('./index.html.php', [
      'auth' => $session->isAuth()
    ]);
    break;
  case 'GET login.php': 
    if ($session->isAuth()) {
      header('location:dashboard.php');
    }
    View::render('./Views/Login.html.php', [
      'message' => false
    ]);
    break;
  case 'GET signup.php':
    View::render('./Views/Signup.html.php', []);
    break;
  case 'POST signup.php':
    $POST = $_POST;
    $db->saveUser($POST);
    break;
  case 'POST login.php': {
    if ($session->isAuth()) {
      header('location:dashboard.php');
    }
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $r = $db->authenticate($userName, $password);
    if ($r) {
      $session->start($r['user_name'], $r['id']); 
      header('location:dashboard.php');
      break;
    }
    else {
      View::render('./Views/Login.html.php', [
        'message' => 'invalid credentials'
      ]);
    }
    break;
   }
  case 'GET dashboard.php': 
    if ($session->isAuth()) {
      View::render('./Views/dashboard.html.php', [
        'username' => $session->getUsername()
      ]);
    } else {
      header('location:login.php');
    }
    break;
  case 'GET logout.php': 
    $session->logout();
    header('location:index.php');
    break;
  default:
    $vars = ['message' => 'Not Found', 'code' => 404];
    View::render('./Views/ERRORO.html.php', $vars);
    break;
 };
?>
</html>