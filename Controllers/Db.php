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
      $admin = false; // not set yet
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
    
    public function getUsers () {
      $sql = 'SELECT * FROM users';
      $query = $this->conn->prepare($sql);
      $query->execute();
      $result = $query->fetchAll();
      $users = [];
      foreach( $result as $row ) {
        array_push($users, $row);
      }

      // var_dump($users);
      
      return $users;
    }

    public function getRegisters () {
      $sql = 'SELECT * FROM Registated';
      $query = $this->conn->prepare($sql);
      $query->execute();
      $result = $query->fetchAll();
      $registers = [];

      foreach( $result as $row ) {
        array_push($registers, $row);
      }

      return $registers;
    }

    public function addTournament ($data) {
      $sql = 'INSERT INTO place (name, category, start, end, description, place) 
                VALUES (:name, :category, :start, :end, :des, :place)';
      $query = $this->conn->prepare($sql);
      $r = $query->execute([
        'name' => $data['name'],
        'des' => $data['des'],
        'category' => $data['category'],
        'start' => $data['start'],
        'end' => $data['end'],
        'place' => $data['place']
      ]);

      return $r;
    }

    public function registerByUserInT ($userID, $tournamentID) {
      $sql = 'INSERT INTO Registated (user_id, tournament_id) VALUES (:userId, :tournamentID)';
      $query = $this->conn->prepare($sql);
      $r = $query->execute([
        'userId' => $userID,
        'tournamentID' => $tournamentID
      ]);

      return $r;
    }

    public function getTournamentsByUserId ($userId) {
      $sql = 'SELECT P.name \'tournament_name\', U.user_name "user_name" FROM Registated R JOIN place P JOIN users U ON (R.tournament_id=P.id AND R.user_id=U.id AND U.id=:userId)';
      $query = $this->conn->prepare($sql);
      $query->execute([
        'userId' => $userId
      ]);
      $result = $query->fetchAll();
      $places = [];
      foreach( $result as $row ) {
        array_push($places, $row);
      }
  
      return $places;
    }

    public function getTournaments () {
      $sql = 'SELECT * FROM place';
      $query = $this->conn->prepare($sql);
      $query->execute();
      $result = $query->fetchAll();
      $places = [];
      foreach( $result as $row ) {
        array_push($places, $row);
      }
  
      return $places;
    }

    public function addInTournament ($id) {

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
