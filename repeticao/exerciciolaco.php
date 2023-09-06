<?php

//Exercicio 1

$numero = readline("Digite um numero: ");

for($i=0; $i < $numero+1; $i++){
    echo $i.($i % 2 == 0 ? " Par" : " Impar")."\n";
}


//Exercicio 1

// $numero = readline("Digite a taboada desejada: ");

// for ($i=1; $i < 11; $i++){
//     echo $numero." x ".$i." = ".($numero * $i)."\n";
// } 
?>