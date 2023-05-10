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
        $sql = "SELECT * FROM client_info WHERE name = ? AND  email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bind_param("ss", $name, $email);
        $stmt->execute();
        $stmt->bind_result($name, $email);
        $name = $stmt->fetch();
     
        echo "name";

        $stmt->close();
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