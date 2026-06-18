<?php
    $notas = [8.5, 6.0, 4.5, 9.0, 7.2, 5.5, 3.8, 10.0, 6.8, 4.9];
    $counter = 0; 
    $aprovados = 0;
    $recuperacao = 0;
    $reprovados = 0;
    $somanotas = 0;

    // --------------------------------------------------------

    function classificarAluno($nota){                    
        if ($nota >= 7) {
            return "Aprovado";
        } if ($nota >= 5 && $nota <= 7) {
            return "Recuperação";
        } if ($nota <= 5) {
            return "Reprovado";
        } else {
            return "Nota inválida";
        }                              
    }

    foreach ($notas as $key) {
        switch (classificarAluno($key)) {
            case 'Aprovado':
                $aprovados = $aprovados + 1;
                break;

            case 'Recuperação':
                $recuperacao = $recuperacao + 1;
                break;
            
            default:
                $reprovados = $reprovados + 1;
                break;
        }
        $somanotas = $somanotas + $key;
    }
    $media = $somanotas / count($notas);

    // -------------------------------------------------------

    echo "Lista de notas: ";
    foreach ($notas as $key) {
        echo "$key, ";
    }

    echo"<br>";
    echo"<hr>";

    foreach ($notas as $key) {
        $counter = $counter + 1;
        echo "Aluno $counter: Nota = $key => ". classificarAluno($key). "<br>"; 
    }
    echo"<hr>";
    echo"Resumo da turma: <br> Aprovados: $aprovados <br> Recuperação: $recuperacao <br> Reprovados: $reprovados <br> Média da turma: $media";

    echo"<br>";
    echo"<hr>";

    if ($media >= 7) {
        echo "Turma com bom desempenho!";
    } else {
        echo "Turma precisa melhorar.";
    }
    
?>