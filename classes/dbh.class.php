<?php
////////// MySLLi //////////////////////////
class Dbh{
    private $host = "localhost";
    private $username = "Tobi";
    private $password = 'Queenzy';
    private $dbname = 'blog';

    protected function connect(){
    
        $conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        // if($conn->connect_error){
        //     echo 'Fail'. $conn->connect_error;
        // }
        // echo "Connection Succesful";
        return $conn;
    }
}


// class Dbh{
//     private $host = "localhost";
//     private $username = "Tobi";
//     private $password = 'Queenzy';
//     private $dbname = 'blog';

//     protected function connect(){
//       $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
//       $pdo = new PDO($dsn, $this->username, $this->password);
//       $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//       return $pdo;
//     }
// }



?>