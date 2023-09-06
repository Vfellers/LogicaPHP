<?php
// 12. Faça um programa que receba 10 números inteiros e mostre:
// • Os números pares digitados;
// • A soma dos números pares digitados;
// • Os números ímpares digitados;
// • A quantidade de números ímpares digitados;
$soma = 0;
$q=0;

$vetorA = [];                               
for ($i=0; $i < 10; $i++) { 
    $vetorA[$i] = readline("Digite um numero ".($i+1)."/10: ");
}

echo "\nPares: ";

foreach ($vetorA as $par) {
    if( $par % 2 == 0){
        echo $par.", ";
        $soma = $soma + $par;
    }
}

echo "\nSoma de pares = ".$soma;
echo "\n\nImpares: ";

foreach ($vetorA as $impar) {
    if( $impar % 2 == !0){
        echo $impar.", ";
        $q= ($q+1);
    }
}

echo "\nForam digitados ".$q." numeros impares.";


?>