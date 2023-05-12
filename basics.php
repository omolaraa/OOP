<?php
declare(strict_types = 1);
include 'includes/autoLoader.inc.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$person1 = new Person('Dami', 'brown', 26);
// echo $person1->name;
// echo $person1->age;
// echo $person1->eyeColor;

$person1 = new Person('Dami', 'brown', 26);
try{
    $person1->setName('Jenny');
    echo $person1->getName();
}catch(TypeError $e){
    echo "Error!:" . $e->getMessage();
}

// echo $person1->name;

echo $person1->getName();

// $person2 = new Person();
// $person2->setName('Sister'); 
// echo $person2-> name;

echo Person :: $drinkingAge;
Person::setDrinkingAge(18);
echo Person :: $drinkingAge;

echo $person1->getDA();
?>


<?php
$buyProduct = new BuyProduct();
echo $buyProduct->getPayment();


// Anonymous class
$newObj = new class(){
    public function helloWorld(){
        echo nl2br("\n Hello World! \n");
    }
};

$newObj->helloWorld();

?>

</body>
</html>