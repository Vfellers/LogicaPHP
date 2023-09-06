<?php
//1. faça um programa que leia um numero e vá realizando soma dos valores já digitados até que o total chegue em 1000

// $total = 0;
// do{
//     $valor = readline("\nDigite um numero: ");
//     $total = ($total + $valor);
//     echo $total;
// }while($total <= 1000)


//------------------------------------------------------------------------------------------------------------------------

//2. Faça um programa, utilizando do while, que permita o usuário fazer contas de adição enquanto quiser.

$continua = "";
do{
    $v1 = readline("Digite o primeiro numero: ");
    $v2 = readline("Digite o segundo numero: ");
    $total = ($v1 + $v2);
    echo "Resultado:".$total."\n";
    $continua = readline("Deseja fazer novo calculo? s/n ");
}while($continua == "s");


?>