<?php
class Database{

private $server;
private $user;
private $password;
private $dbname;
private $connection;
private static $dbconnection = null;


private function __construct()
{
    $this->server = 'localhost:3306';
    $this->user = 'amoda';
    $this->password = 'admin';
    $this->dbname = 'music_streaming';
    $this->Connect();
}

public static function getDbConnection()
{
    if (self::$dbconnection == null) {
        self::$dbconnection = new Database();
    }
    return self::$dbconnection;
}

//establishing a connection to database
private function Connect()
{
    $this->connection = new mysqli($this->server, $this->user, $this->password, $this->dbname);
    if (mysqli_connect_errno()) {
        echo "Error: Could not connect to database.";
        exit;
    }
}

public function queryData($sql)
 {
        $result = mysqli_query($this->connection, $sql) or die("Data cannot Updated");
        return $result;
}

public function insertData($sql)
 {
        if ( $this->connection->query($sql) === TRUE) {
           return true;
        } else {
           //echo $this->connection->error;
           return false;
           
        }
      
}

}

?>