
    <?php
   $produtos = [
    ["nome" => "Tablet", "preco" => "R$ 1500", "categoria" => "Eletrônicos"],
    ["nome" => "Notebook", "preco" => "R$ 5000", "categoria" => "Eletrônicos"],
    ["nome" => "Fogão", "preco" => "R$ 4000", "categoria" => "Eletrônicos"],
    
    ["nome" => "Miojo", "preco" => "R$ 20", "categoria" => "Comidas"],
    ["nome" => "Farinha", "preco" => "R$ 15", "categoria" => "Comidas"],
    ["nome" => "Feijão", "preco" => "R$ 18", "categoria" => "Comidas"],
    
    ["nome" => "Pesego", "preco" => "R$ 25", "categoria" => "Fruta"],
    ["nome" => "Abacaxi", "preco" => "R$ 19", "categoria" => "Fruta"],
    ["nome" => "Maçã", "preco" => "R$ 10", "categoria" => "Fruta"]
];
    $cores = [
        "Eletrônicos" => "#4ef1e4",
        "Comidas" => "#fbff21",
        "Fruta" => "#ff2c5a"
    ];

    echo "<table border = '1px'>";
    
    echo "</table>";

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            text-align: left;
            margin: 20px auto;

        }
        th, td {
            border: 1px solid #000000;
            padding: 10px;
        }
        th {
            background-color: #000000;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Tabela com Produtos</h1>
    <table>
        <tr>
            <th>Nome do Produto</th>
            <th>Preço</th>
            <th>Categoria</th>
        </tr>
    <?php
    foreach ($produtos as $produto) {
        $categoria_atual = $produto['categoria'];

        $cor_da_linha = $cores[$categoria_atual];

        echo "<tr style='background-color: {$cor_da_linha};'>";

        echo "<td>" . $produto['nome'] . "</td>";
        echo "<td>" . $produto['preco'] . "</td>";
        echo "<td>" . $categoria_atual . "</td>";

        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>