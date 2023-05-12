<?php
 
 class UsersView extends Users{

    public function showServices($name){
        $results = $this->getServices( $name );

        var_dump($results);
        echo "<br> Service name: " . $results[0]['name'] . "<br>" . "Service Description: "  . $results[0]['description'];
    }

 }