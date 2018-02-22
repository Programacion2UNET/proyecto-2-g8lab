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
        return true;
      } catch (PDOException $err) {
        $this->conn = false;
        echo "Error on db module, connect method: $err";
        var_dump($err);
        return false;
      }
    }

    public function saveUser ($userData) {
      if (!$this->conn) return false;
      $teamName = $userData['teamName'];
      $shortName = $userData['shortName'];
      $username = $userData['userName'];
      $email = $userData['email'];
      $password = $userData['password'];
      $inCharge = $userData['inCharge'];
      $password = hash('SHA256', $password);

      $sql = 'INSERT INTO users(team_name, in_charge, user_name, short_name, email, password) 
      VALUES (:teamName, :inCharge, :username, :shortName, :email, :password)';
      
      $query = $this->conn->prepare($sql);
      // $query->bindParam(':email', $email); NEIN
      $r = $query->execute([
        'teamName' => $teamName,
        'inCharge' => $inCharge,
        'username' => $username,
        'shortName' => $shortName,
        'email' =>  $email,
        'password' =>  $password
      ]);

      return $r;
    }
    
    public function authenticate ($username, $password) {
      if (!$this->conn) return false;
      $password = hash('SHA256', $password);
      $sql = 'SELECT * FROM users WHERE user_name=:username AND password=:password';
      $query = $this->conn->prepare($sql);
      $query->execute([
        'username' => $username,
        'password' => $password
      ]);
      $user = $query->fetch(PDO::FETCH_ASSOC);
      
      return $user;
    }

      // SHOULD EXECUTE db_setup.(bash|bat|...)
    public function setup () {}
    public function disconnect ()  {}
  };
?>
