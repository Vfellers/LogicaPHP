<?php
// 3. Faça um programa que receba do usuario um vetor com 10 posições.
// Mostre o menor e o maior valor existente no vetor


$valores = [];

for($i=0; count($valores) < 10; $i++){
    $valor = readline("Digite um numero ".($i+1)."/10: ");
    array_push($valores, $valor);                               //ou $valores[$i] = $valor;    
}

echo "\nMaior valor digitado: ".max($valores);
echo "\nMenor valor digitado: ".min($valores);
echo "\nMedia: ".array_sum($valores) / count($valores);



?>