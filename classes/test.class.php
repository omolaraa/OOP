<?php

class Test extends Dbh{

    public function getServices(){
        $sql = "SELECT * FROM services";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch_array()){

            echo $row['name'] . '<br>';
        }
    }

    public function getClientsStmt($name, $email){

        $host = "localhost";
        $username = "root";
        $password = '';
        $dbname = 'omolara_blog';

        $conn = new mysqli($host, $username, $password, $dbname);

        $stmt = $conn->prepare("SELECT name, email FROM client_info WHERE name = ? AND email = ?");
        $stmt->bind_param("ss", $name, $email);
        $stmt->execute();

        /* bind variables to prepared statement */
        $stmt->bind_result($col1, $col2);

        /* fetch values */
        while ($stmt->fetch()) {
            printf("%s %s\n", $col1, $col2);
        }

        // $sql = "SELECT * FROM client_info WHERE name = ? AND  email = ?";
        // $stmt = $this->connect()->prepare($sql);
        // $stmt->bind_param("ss", $name, $email);
        // $stmt->execute();
        // $stmt->bind_result($name, $email);
        // $name = $stmt->fetch();
     
        // echo "name";

        // $stmt->close();
    }















    
    // public function setCategoriesStmt($categoryName, $categorySlug){
    //     $sql = "INSERT INTO category (categoryName, categorySlug) VALUES (?, ?)";
    //     $stmt = $this->connect()->prepare($sql);
    //     $stmt->bind_param("ss", $categoryName, $categorySlug);
    //     $stmt->execute();
       
    //     // if ($stmt ==  true) {

    //     //     echo "</br>New record created Successfully";
        
    //     // }
        
         
        
    //     $stmt->close();
    // }

}
?> 