<?php
    $x = 3.5;
    $y = 4.3;
    $z = "9.9";
    $n1 = (int) $x + $y;
    $n2 = (int) ($x + $y);
    $n3 = (float) ($y + $z);
    echo "conversões explicitas <br> resultados: $n1, $n2, $n3 <br><br>";

    //Testes
    $a = "Casal 20";
    $b = 10;
    //$c = $a + $b;
    echo "teste7 <br> $a + $b dá erro <br><br>";

    $pre = "hiper";
    echo "teste 8 <br> ${pre}texto <br> resposta certa: D) <br><br>";

    
?>