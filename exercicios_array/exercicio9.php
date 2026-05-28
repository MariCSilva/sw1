<?php
    echo"*lista: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10] <br><br>";
    $num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $pares = [];
    foreach ($num as $valor) {
        if ($valor %2 == 0) {
            echo"$valor é par <br>";
            $pares[] = $valor;
        } else {
            echo"$valor é impar <br>";
        }
    }

    echo "<br> Lista de pares: ";
    foreach ($pares as $valor) {
        echo "$valor, ";}
?>