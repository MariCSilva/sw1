<?php
    $temperaturas = [22.5, 24.0, 25.5, 23.0];

    function calcularMediaTemperatura($listaDeTemperaturas){
        $soma = array_sum($listaDeTemperaturas);
        $qtd = count($listaDeTemperaturas);
        return $soma / $qtd;
    }

    echo "a média dos numeros no array é: ". calcularMediaTemperatura($temperaturas);
?>