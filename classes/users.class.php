<?php

class Users extends Dbh{
     protected function getServices($name){
        $sql = "SELECT * FROM services WHERE name = '$name' ";
        $stmt = $this->connect()->query($sql);
        $row = $stmt->fetch_all(MYSQLI_ASSOC);

        return $row;
     }

     protected function setCategories( $categoryName, $categorySlug ){
        $query = "INSERT INTO category (categoryName, categorySlug) VALUES ( '$categoryName', '$categorySlug')";
        $this->connect()->query($query);
       
    }
}