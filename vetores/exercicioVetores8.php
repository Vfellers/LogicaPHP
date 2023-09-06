<?php
/* 8. Faça um vetor com 50 posições onde cada posição deverá ser preenchido com o seguinte valor: ($i + 5 ∗ $i), 
sendo $i a posição do elemento no vetor. Em seguida imprima o vetor na tela */

$valores = [];                              
for ($i=0; $i < 20; $i++) { 
    $valores[$i] = ($i + (5 * $i));
}

print_r($valores);
?>