<?php

$valores = [];                               //valores aleatorios, já preenche
for ($i=0; $i < 20; $i++) { 
    $valores[$i] = rand(1, 20);
}

foreach($valores as $v){
    echo $v." ";
}
echo "\n";


$vetor2 = array_unique($valores);     //coloca dentro desse novo vetor o vetor $valores, mas o unique nao deixa repetir 

foreach($vetor2 as $v){
    echo $v." ";
}
?>