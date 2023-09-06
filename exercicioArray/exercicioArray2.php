<?php
// 2. Faça um programa que leia 10 valores e os escreva na ordem 
// contrária à que foram digitados.
// Utilize as funções de array mostradas anteriormente (consulte a documentação do php)


$valores = [];
$i=0;

while(count($valores) < 10){
    $valor = readline("\nDigite um numero: ");
    array_push($valores, $valor);
    // echo ($valores[$i]);                 //cada vez incrementa o i, entao chama o vetor $frutas[0] item 1, passa mais uma posiçao $frutas[1] item 2
    $i++;
}

print_r(array_reverse($valores, true));   // inverte os arrays tambem
print_r(array_reverse($valores));
?>