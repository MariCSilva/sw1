<?php
    echo"*lista: [6, 4, 5, 2, 3, 1] <br><br>";
    $num = [6,4,5,2,3,1];
    sort($num);
    foreach ($num as $valor) {
        echo "$valor, ";}
    echo"<hr>";
    rsort($num);
    foreach ($num as $valor) {
        echo "$valor, ";}
    echo"<hr>";
?>