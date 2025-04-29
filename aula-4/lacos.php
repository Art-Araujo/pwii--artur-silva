<?php

    // while

    echo "While <br>";
    $contador = 1;

    while ($contador < 6) {
        echo $contador, "<br>";
        $contador++;
    }


    // do while

    echo "Do While <br>";
    $contadorii = 1;
    do {
        echo $contadorii, "<br>";
        $contadorii++;
    } while ($contadorii < 6);

    // for

    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }
?>