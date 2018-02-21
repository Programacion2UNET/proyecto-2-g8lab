<?php 
  class Db {
    private $dbName;
    private $port;
    private $host;
    private $user;
    private $password;
    private $conn = false;

    public function __construct ($config) {
      $this->dbName  = $config['dbName'];
      $this->password = $config['password'];
      $this->user = $config['user'];
      $this->port = $config['port'];
      $this->host = $config['host'];
    }

    public function connect () {
      if ($this->conn) return true;
      try  {
        $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->user, $this->password);
        // $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPION);
      } catch (PDOException $err) {
        $this->conn = false;
        echo "Error on db module, connect method: $err";
        var_dump($err);
      }
    }

    public function disconnect ()  {}
    public function saveUser ($userData) {}
    public function getUser ($id)  {}
    public function authenticate ($username, $password) {}
    public function setup () {}
  };
?>
