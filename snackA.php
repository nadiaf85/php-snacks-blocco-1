<!-- Snack A
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa
e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<?php
$partite = [
    [
        'squadra1' => 'Virtus Bologna',
        'squadra2' => 'Olimpia Milano',
        'puntiSquadraUno' => 80,
        'puntiSquadraDue' => 66,
    ],
    [
        'squadra1' => 'Pall. Cantù',
        'squadra2' => 'Reyer Venezia',
        'puntiSquadraUno' => 68,
        'puntiSquadraDue' => 72,
    ],
    [
        'squadra1' => 'Auxilium Torino',
        'squadra2' => 'Fortitudo Bologna',
        'puntiSquadraUno' => 92,
        'puntiSquadraDue' => 58,
    ],
    [
        'squadra1' => 'Scaligera Verona',
        'squadra2' => 'Basket Brescia',
        'puntiSquadraUno' => 81,
        'puntiSquadraDue' => 89,
    ],        
];

// var_dump($partite)
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

<div>
    <?php
        for( $i=0; $i<count($partite); $i++){
            echo $partite[$i]['squadra1'].'-'.$partite[$i]['squadra2'].'|'.
            $partite[$i]['puntiSquadraUno'].'-'.$partite[$i]['puntiSquadraDue'].'<br>';
        }
    ?>
</div>

</body>
</html>