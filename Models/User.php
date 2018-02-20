<?php 
  class User {
    private $username = '';
    private $localAddress = null;

    public function __construct ($username, $localAddress) {
      $this->username = $username ?? "i dont kwon php @:";
      $this->localAddress = $localAddress ?? "what i'am doing here?, js is love!";
    }

    public function getUsername () {
      return $this->username;
    }

    public function getLocalAddress () {
      return $this->localAddress;
    }

    public function setUsername ($newName) {
      $this->username = $newName;
    }

    public function setLocalAddress ($newName) {
      $this->username = $newName;
    }
  };
?>
