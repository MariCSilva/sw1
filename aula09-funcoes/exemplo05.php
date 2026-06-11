<?php
    function msg($periodo){
        // if ($periodo == "manhã") {
        //     echo"Bom dia!! <br>";
        // }else {
        //     if ($periodo == "tarde") {
        //         echo"Boa tarde!! <br>";
        //     } else {
        //         if ($periodo == "noite") {
        //             echo"Boa noite!! <br>";
        //         } else {
        //             echo"Valor inválido <br>";
        //         }
                
        //     }
            
        // }

        switch ($periodo) {
            case 'manhã' || 'Manhã' || 'MANHÃ':
                 echo"Bom dia!! <br>";
                break;

            case 'tarde' || 'Tarde' || 'TARDE':
                echo"Boa tarde!! <br>";
                break;

            case 'noite' || 'Noite' || 'NOITE':
                echo"Boa noite!! <br>";
                break;
            
            default:
                echo"Valor inválido <br>";
                break;
        }


        // echo "Bom dia <br>";
    }

    msg("manhã");

?>