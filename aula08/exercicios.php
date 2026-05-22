<?php
    echo "<p>exercicio 1<p/>";

    $nomes = ["Mariana", "Ramos", "Brayan", "Gustavo", "Vinicius"];

    foreach ($nomes as $indice => $valor) {
         echo "$valor <br>";
    }
    echo"<hr>";
    echo "<p>exercicio 2<p/>";   

    $nomes[] = "Thiago";

    foreach ($nomes as $indice => $valor) {
        echo "$valor <br>";
   }
   echo"<hr>";
   echo "<p>exercicio 3<p/>";

   $nomes[1] = "Rafael";

   foreach ($nomes as $indice => $valor) {
        echo "$valor <br>";
    }
    echo"<hr>";
    echo "<p>exercicio 4<p/>";

    $numeros = [1,5,6,12,8,21,8,19,30,7];

    foreach ($numeros as $valor) {
         echo "$valor, ";
    }

    echo"<br>";

    $qtde = count($numeros);
    $soma = 0;

    for ($i= 0 ; $i <= $qtde -1; $i++) { 
        $soma = $soma + $numeros[$i];
        
    }
    $media = $soma / $qtde;
    echo"a média é: $media <br>";
    echo"<hr>";

    echo "<p>exercicio 5<p/>"; 
    $dias = ["segunda-feira", "terça-feira", "quarta-feira", "quinta-feira", "sexta-feira", "sábado", "domingo"];  
    $diasuteis = array_slice($dias, 0, 5);
    echo"dias da semana: ";
    foreach ($dias as $val) {
        echo"$val, ";
    }    

    echo"<br>";
    echo"os dias uteis são: ";
    foreach ($diasuteis as $val) {
        echo"$val, ";
    } 
    
?>