<?php
    echo"*lista: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10] <br><br>";
    $num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    foreach ($num as $valor) {
        if ($valor %2 == 0) {
            echo"$valor é par <br>";
        } else {
            echo"$valor é impar <br>";
        }
        ;
    }
?>