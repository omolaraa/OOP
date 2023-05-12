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



$allServices = new Test();

    // $allServices->getServices();
    // $allServices->setCategories('JavaScriptss', 'javascriptsNotes');
    // $allServices->setCategories();





    $userObj = new UsersView();
    $userObj->showServices('Frontend Development');
    $userObj2 = new UsersContr();
    // $userObj2->createCategory('Code', 'coded');
    ?>

</body>
</html>