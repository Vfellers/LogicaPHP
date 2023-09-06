<?php
    $operacao = readline ("Escolha a operação desejada (1-Soma // 2-Subtração // 3-Multiplicação // 4-Divisão): ");

    $n1 = readline ("Digite o primeiro numero: ");
    $n2 = readline ("Digite o segundo numero: ");

    switch($operacao){
        case 1: 
            echo "Resultado: ".$n1 + $n2;
        break;
        case 2: 
            echo "Resultado: ".$n1 - $n2;
        break;
        case 3: 
            echo "Resultado: ".$n1 * $n2;
        break;
        case 4: 
            echo "Resultado: ".$n1 / $n2;
        break;
        default:
            echo "Operação invalida!";
        break;
    }

?>