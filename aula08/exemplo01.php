<?php
    $frutas = ["Maçã", "Banana", "Laranja"];
    // echo $frutas;

    // echo $frutas[0];

    // foreach ($frutas as $indice => $valor) {
    //     echo $indice;
    //     echo "indice: $indice ==> $valor <br>";
    // }

    // foreach ($frutas as $valor) {
    //     echo "Fruta: $valor <br>";
    // }

    // $qtde = count($frutas);

    // for ($i= 0 ; $i <= $qtde -1; $i++) { 
    //     // echo $i. "<br>";
    //     echo $frutas[$i]. "<br>";
    // }

    $animais = ["gato", "cachorro"];

    $animais[] = "passarinho";

    foreach ($animais as $value) {
        echo "$value <br>";
    }

    echo"<hr>";

    $animais[1] = "tartaruga";

    foreach ($animais as $value) {
        echo "$value <br>";
    }

    echo"<hr>";

    array_push($animais, "peixe");

    foreach ($animais as $chave => $value) {
        echo "$chave => $value <br>";
    }

    echo"<hr>";

    array_pop($animais);

    foreach ($animais as $chave => $value) {
        echo "$chave => $value <br>";
    }

    echo"<hr>";

    array_unshift($animais, "cachorro");

    foreach ($animais as $chave => $value) {
        echo "$chave => $value <br>";
    }

    echo"<hr>";
?>