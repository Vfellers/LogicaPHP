<?php
/* 9. Escreva um programa que leia numeros inteiros no intervalo [0,50] e os armazene em um vetor com 10 posições. 
Preencha um segundo vetor apenas com os números impares do primeiro vetor. 
imprima o primeiro vetor 
imprima o segundo vetor */

$valores = [];                               
for ($i=0; $i < 10; $i++) { 
    $valores[$i] = rand(0, 50);
}

foreach($valores as $v){
    echo $v." ";
}
echo "\n";


$vetor2 = ($valores);

foreach($vetor2 as $v){
    if ($v % 2 ==! 0){
        echo $v." ";
    }
}
?>


