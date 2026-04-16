<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01</title>
</head>
<body>
    <h1>lista de itens</h1>
    <ul>
        <!-- aqui começa o laço -->
         <?php
            for ($i=1; $i <=5; $i++) { 
                echo"<li> item $i </li>";
            }
         ?>

        <!-- <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li> -->

        <!-- aqui termina o laço -->
    </ul>
</body>
</html>