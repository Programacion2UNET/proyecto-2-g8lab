<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" /> 
  <!-- here localtion view controller helper -->
  <script type="application/javascript" src="assets/scripts/index.js"></script> 
  <title>Proyecto 2 - Programacion 2 - UNET (TournametsTournamets)</title>
  <link rel="stylesheet" href="assets/css/main.css" />
  <link rel="stylesheet" href="assets/css/index.css" />
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
    else {
      View::render('./Views/Login.html.php', [
        'message' => false
      ]);
    }
    break;
  case 'GET signup.php':
    View::render('./Views/Signup.html.php', []);
    break;
  case 'POST signup.php':
    $POST = $_POST;
    $db->saveUser($POST);
    header('location:login.php');
    break;
  case 'POST login.php': {
    if ($session->isAuth()) {
      header('location:dashboard.php');
    }
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $r = $db->authenticate($userName, $password);
    if ($r) {
      $session->start($r['user_name'], $r['id'], $r['admin']); 
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
      $tournamentsById = $db->getTournamentsByUserId($session->getId());
      View::render('./Views/dashboard.html.php', [
        'username' => $session->getUsername(),
        'isAdmin' => $session->isAdmin(),
        'tournamentsById' => $tournamentsById
      ]);
    } else {
      header('location:login.php');
    }
    break;
  case 'GET admin.php': 
    if ($session->isAuth() && $session->isAdmin()) {
      $users = $db->getUsers();
      $tournaments = $db->getTournaments();
      $registers = $db->getRegisters();
      View::render('./Views/admin.html.php', [
        'users' => $users,
        'tournaments' => $tournaments,
        'registers' => $registers
      ]);
    }
    else {
      header('location:login.php');
    }

    break;
  case 'GET logout.php': 
    $session->logout();
    header('location:index.php');
    break;
  case 'GET addT.php': {
    if ($session->isAuth()) {
      View::render('./Views/addT.html.php');
    }
    else {
      header('location:login.php');
    }
    break;
  }
  case 'POST addT.php': {
    if ($session->isAuth()) {
      $name = $_POST['name'];
      $des = $_POST['description'];
      $category = $_POST['category'];
      $start = $_POST['start'];
      $end = $_POST['end'];
      $place = $_POST['place'];
      if (!$name || !$des || !$category || !$start || !$end || !$place) {
        View::render('./Views/ERRORO.html.php', ['message' => 'empty fields', 'code' => 500]);
        var_dump($_POST);
      }
      $R = $db->addTournament([
        'name' => $name,
        'des' => $des,
        'category' => $category,
        'start' => $start,
        'end' => $end,
        'place' => $place
      ]);
      if ($R) {
        View::render('./Views/ERRORO.html.php', ['message' => 'SAVED', 'code' => 200]);
      } else {
        View::render('./Views/ERRORO.html.php', ['message' => 'not save', 'code' => 500]);
      }
    }
    else {
      header('location:login.php');
    }
    break;
  }
  case 'GET registerIn.php': {
    if ($session->isAuth()) { 
      $id = $_GET['id'];
      $db->registerByUserInT($session->getId(), $id);
      header('location:login.php');
    }
    else {
      header('location:userTRegister.php');
    }
  }
    break;
  case 'GET userTRegister.php': {
    if ($session->isAuth()) {
      $allT = $db->getTournaments();
      foreach ($allT as &$t) {
        $r = $db->getIfIn($t['id'], $session->getId());
        $t['isIn'] = $r;
      }
      View::render('./Views/userTRegister.html.php', [
        'allT' => $allT
      ]);
    }
    else {
      header('location:index.php');
    }
    break;
  }
  case 'ERR.php':
  default:
    $vars = ['message' => 'Not Found', 'code' => 404];
    View::render('./Views/ERRORO.html.php', $vars);
    break;
 };
?>
</html>