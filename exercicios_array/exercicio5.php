<?php
    echo"*lista: [Vermelho, Azul, Amarelo] <br><br>";
    $cores = ["Vermelho", "Azul", "Amarelo"];
    array_push($cores, "Magenta");
    foreach ($cores as $valor) {
        echo "$valor <br>";}
    echo"<hr>";
    array_shift($cores);
    foreach ($cores as $valor) {
        echo "$valor <br>";}
    echo"<hr>";
    
?>