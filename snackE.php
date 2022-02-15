<!-- Snack E
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

    $classe = [
        [
            'nome'=> 'Mario',
            'cognome' => 'Rossi',
            'voti' => ['8', '4', '7', '5']
        ],
        [
            'nome'=> 'Luca',
            'cognome' => 'Verdi',
            'voti' => ['7', '7', '8', '9']
        ],
        [
            'nome'=> 'Matteo',
            'cognome' => 'Bianchi',
            'voti' => ['7', '9', '5', '6']
        ],
        [
            'nome'=> 'Giulia',
            'cognome' => 'Baldo',
            'voti' => ['4', '8', '8', '6']
        ],
    ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnackE</title>
</head>
<body>

    <?php
        for ($i=0; $i <count($classe) ; $i++) { 
            $mediaVoti = (array_sum($classe[$i]['voti']) /count($classe[$i]['voti']));
            echo $classe[$i]['nome']." ".$classe[$i]['cognome']." |Media voti:".$mediaVoti."<br>";
        }
    ?>
    
</body>
</html>