<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //email: adm@gmail.com
    //senha: 1234

    if ($email == 'adm@gmail.com' && $senha == '1234') {
        //echo "vamos para a area restrita";
        $nome = "Mariana";
        header('Location: restrita.php?nome='.$nome);
    } else {
        //echo "volte para o formulario";
        header('Location: erro.php');      
    }
    
?>