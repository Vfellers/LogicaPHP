<?php
// 13. Faça um programa que leia dois vetores de 10 números.
// Crie um vetor que seja a interseção entre os 2 vetores anteriores, ou seja, 
// que contenha apenas os números que estão em ambos os vetores. 
// Não deve conter números repetidos. 
$vetorC = [];

$vetorA = [];                               
for ($i=0; $i < 10; $i++) { 
    $vetorA[$i] = readline("Digite um numero ".($i+1)."/10: ");
}

$vetorB = [];                               
for ($i=0; $i < 10; $i++) { 
    $vetorB[$i] = readline("Digite um numero ".($i+1)."/10: ");
    if (key_exists($vetorB[$i], $vetorA)){
        $vetorC[] = $vetorB[$i];
    }
}

// print_r($vetorC);
$valor = array_unique($vetorC);
print_r($valor);
?>