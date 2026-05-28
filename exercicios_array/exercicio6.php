<?php
    echo"*lista: [Mariana, Ramos, Brayan, Gustavo, Vinicius] <br><br>";
    $nomes = ["Mariana", "Ramos", "Brayan", "Gustavo", "Vinicius"];
    in_array("Carlos", $nomes);
    if (in_array("Carlos", $nomes)) {
        echo "Esse nome está na lista";
    } else {
        echo "Esse nome não está na lista";
    }
?>