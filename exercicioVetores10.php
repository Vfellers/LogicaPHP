<?php
/* 10. Faça um programa que receba do usuario dois vetores, A e B, com 10 numeros inteiros cada. 
Crie um novo vetor denominado C calculando C = A - B. 
Mostre na tela os dados do vetor C. */
$vetorA = [];                               
for ($i=0; $i < 10; $i++) { 
    $vetorA[$i] = rand(0, 100);
}

$vetorB = [];                               
for ($x=0; $x < 10; $x++) { 
    $vetorB[$x] = rand(0, 100);
}

print_r($vetorA);
print_r($vetorB);

$vetorC = [];
for ($y=0; $y < 10; $y++) { 
    $total = $vetorA[$y] - $vetorB[$y];
    $vetorC[$y] = $total;
    // echo $vetorC[$y].", ";
}
print_r($vetorC);

?>