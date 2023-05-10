<?php
class Person{
    private $name;
    private $eyeColor;
    private $age;

    public static $drinkingAge = 21;

    public function __construct($name, $eyeColor, $age){
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }
   


    public function setName(string $name){
        $this->name = $name;
    }

    public function getName(){
      return  $this->name;
    }
     public function getDA(){
      return  self::$drinkingAge;
    }

    public static function setDrinkingAge($newDA){
        self::$drinkingAge = $newDA;
    }
}

?>