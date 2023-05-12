<?php 
declare(strict_types = 1);
include 'includes/autoLoader.inc.php';
include 'abstract/paymentType.abtract.php';

?>

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

<<<<<<< HEAD
    $userObj = new UsersView();
    $userObj->showServices('Frontend Development');
    $userObj2 = new UsersContr();
    // $userObj2->createCategory('Code', 'coded');
=======
// $buyProduct = new BuyProduct();
// echo $buyProduct->getPayment();


//Anonymous class
// $newObj = new class(){
//     public function helloWorld(){
//         echo nl2br("\n Hello World! \n");
//     }
// };

// $newObj->helloWorld();

$allServices = new Test();

    $allServices->getServices();
    $allServices->getClientsStmt("tobi", "g3osunleye@outlook.com");
    // $allServices->setCategoriesStmt('PHsdfghP', 'phpNotes');
    // $allServices->setCategoriesStmt('PHfhP', 'phpgdwNotes');

>>>>>>> 6510817a1654dbde04c3e7a8308bccf07f81bacc
    ?>

</body>
</html>