<?php
    echo"*lista: [10, 6, 7, 9] <br><br>";
    $numeros = [10, 6, 7, 9];
    $qtde = count($numeros);
    $soma = 0;

    for ($i= 0 ; $i <= $qtde -1; $i++) { 
        $soma = $soma + $numeros[$i];
        
    }
    $media = $soma / $qtde;
    echo"a média é: $media <br>";
?>