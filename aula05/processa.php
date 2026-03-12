<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa Dados</title>
</head>
<body>
    <?php
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
        $email = $_GET['email'];
        //echo "O nome é: $nome";
        $anoatual = date('Y');
        $anonascimento = $anoatual - $idade;
    ?>

    <p>O nome digitado é: <?php  echo $nome; ?> </p>
    <p>A idade digitada é: <?php  echo $idade; ?> </p>
    <p>O email digitado é: <?php  echo $email; ?> </p>
    <p>O ano que você nasceu é: <?php  echo $anonascimento; ?> </p>

</body>
</html>