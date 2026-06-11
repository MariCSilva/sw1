<?php
    function calcularAutonomia($capacidadeBateria, $consumoPorMinuto){
        return $capacidadeBateria / $consumoPorMinuto;
    }

    $tempoRestanteVoo = calcularAutonomia(50, 2);
    echo "Tempo estimado de voo: $tempoRestanteVoo minutos";

?>