<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo 02</title>
    <style>
        table,tr,th,td{
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <h1>tabela de alunos</h1>
    <table>
        <tr>
            <th>RM</th>
            <th>NOME</th>
            <th>EMAIL</th>
        </tr>

        <?php
            for ($i=1; $i <=2 ; $i++) { 
                echo"<tr>";
                for ($j=1; $j <=3 ; $j++) { 
                    echo"<td>Linha $i Coluna $j</td>";
                }
                // echo"<td>Linha $i Coluna 1</td>";
                // echo"<td>Linha $i Coluna 2</td>";
                // echo"<td>Linha $i Coluna 3</td>";
                echo"</tr>";
            }
        
        
        ?>

        <!-- <tr>
            <td>Linha 1 coluna 1</td>
            <td>Linha 1 coluna 2</td>
            <td>Linha 1 coluna 3</td>
        </tr>
        <tr>
            <td>Linha 2 coluna 1</td>
            <td>Linha 2 coluna 2</td>
            <td>Linha 2 coluna 3</td>
        </tr> -->
    </table>
</body>
</html>