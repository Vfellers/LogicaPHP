<?php
    // 2.Leia um vetor de 10 posições. 
    // Conte e escreva quantos valores pares ele possui. 

    $valores = [];                               //valores aleatorios, já preenche
    for ($l=0; $l < 10; $l++) { 
        $valores[$l] = rand(1, 10);
    }
    // print_r($valores);
    // $valores = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $i = 0;

    foreach($valores as $x){
        if ($x % 2 == 0){
            echo $x." ";
            $i++;
        }
    }
    echo "\nExistem ".$i." valores pares no array.";

?>