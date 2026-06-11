<?php
    function verificarAcesso($senhaDigitada){
        if ($senhaDigitada == 123456) {
            return "Acesso Liberado";
        } else {
            return "Acesso Negado";
        }        
    }

    $senha = verificarAcesso(123456);
    echo $senha;
    echo"<br> <br>";
    $senha = verificarAcesso(123467);
    echo $senha;
?>