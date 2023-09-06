<?php
// 6. Fazer um programa para ler 5 valores e, em seguida, mostrar todos os valores lidos marcando o maior, menor e o médio com os simbolos
// > maior
// < menor
// ~ médio

$valores = [];

for ($i=0; $i < 5; $i++) { 
    $valor = readline("Digite um numero ".($i+1)."/5: "); 
    array_push($valores, $valor);
}

$max = max($valores);
$min = min($valores);

foreach($valores as $x){
    echo $x;
    if($x == $max){
        echo " >";
    } else if ($x == $min){
        echo " <";
    }
    echo "\n";
}
    



?>