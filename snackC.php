<!-- Snack C
Creare un array con 15 numeri casuali, tenendo conto che l’array
non dovrà contenere lo stesso numero più di una volta -->

<?php

$arrayNumbers = [];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnackC</title>
</head>
<body>
    
    <?php
        while(count($arrayNumbers) < 15){
            $numbers = rand (1,100);
            if(!in_array($numbers, $arrayNumbers)){
                $arrayNumbers[] = $numbers;
            }
        }

        var_dump($arrayNumbers);
    ?>
</body>
</html>