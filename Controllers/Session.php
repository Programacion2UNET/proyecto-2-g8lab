<?php 
  class Session {
    public function __construct () {}

    public function start ($username, $id) {
      $_SESSION['username'] = $username;
      $_SESSION['id'] = $id;
      $this->setFakeToken();
    }

    public function setFakeToken () {
      $myTokken = hash("tiger192,3", $_SESSION['username']. $_SESSION['id'].'/'.time());
      setcookie('isAuth', $myTokken, time()+9000);
      $_SESSION['isAuth'] = $myTokken;
      return $myTokken;
    }

    public function getFakeTokken () {
      if (!isset($_SESSION['isAuth'])) return false;
      return $_COOKIE['isAuth'];
    }

    public function getUsername () {
      return $_SESSION['username'];
    }

    public function getId () {
      return $_SESSION['id'];
    }

    public function ValidateFakeToken () {
      if (!isset($_SESSION['isAuth'])) return false;
      $myTokken = hash("tiger192,3", $_SESSION['username'].$_SESSION['id'].'/'.time());
      if (isset($_COOKIE['isAuth'])) {
        if (explode($myTokken, '/')[0] == explode($this->getFakeTokken(), '/')[0]) {
          if ($_SESSION['isAuth'] == $_COOKIE['isAuth']) return true;
        }
      }

      return false;
    }

    public function logout () {
      if (!isset($_SESSION['isAuth'])) { 
        return true;
      }
      $_SESSION['username'] = false;
      $_SESSION['id'] = false;
      setcookie('isAuth', null);
      session_destroy();
      return true;
    }

    public function isAuth () {
      return $this->ValidateFakeToken();
    }
  };
?>
