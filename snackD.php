<!-- Snack D
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere
il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php

    $paragrafo = "Di origine preistorica, l'abitato venne rifondato dai Romani all'interno dell'ansa del fiume intorno alla metà
        del I secolo a.C., rimanendo sotto il governo dell'Impero fino al V secolo, quando venne occupato dal re germanico Teodorico il Grande.
        Entrò a far parte del dominio dei Longobardi prima e dei Franchi poi, rimanendo fedele nei secoli successivi agli imperatori del Sacro
        Romano Impero. Divenne libero Comune all'inizio del XII secolo per poi prosperare sotto la Signoria degli Scaligeri. Si dedicò alla
        Serenissima nel 1405, passando sotto il governo della Repubblica di Venezia. Occupata militarmente da Napoleone nel 1797, nel 1815
        divenne parte dell'Impero austriaco che la trasformò nella sua maggiore piazzaforte militare in territorio italico, per essere annessa
        al Regno d'Italia nel 1866. Verona è stata dichiarata patrimonio dell'umanità dall'UNESCO per le peculiarità urbanistiche e per il patrimonio
        artistico e culturale. Il suo simbolo è l'Arena ed è conosciuta nel mondo per l'opera di William Shakespeare Romeo e Giulietta.
        Sede universitaria e importante snodo di scambio logistico e intermodale tramite il Quadrante Europa, l'industria riveste un ruolo
        chiave nell'economia della città, come il turismo fieristico e culturale.";

    $paragrafoSuddiviso = explode ('.',$paragrafo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnackD</title>
</head>
<body>

    <p><?php echo $paragrafo; ?></p>

    <p><?php var_dump($paragrafoSuddiviso); ?></p>
    
</body>
</html>