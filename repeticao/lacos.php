<?php

/**
 *
 * FOR
 * for($inicio; condiçao; $incremento){
 *    Bloco de execução
 * }
 *
 * WHILE
 * while(condicao){
 * bloco de codigo
 * }
 *
 */

/*WHILE*/
// $i = 0;
// while($i>100){
//     echo $i."\n";

//     $i++; // Incrementa a cada rodagem
// }



 /* FOR
 for($i = 0; $i < 10; $i++){
    //echo $i.($i %2 == 0 ? " par" : " impar")."\n";
    echo ($i + $i)."\n";
 }
 */

//DO WHILE
// $i = 100;
//  do{
//     echo "É menor que 100";
//     $i++;
//  }while($i < 100);
 

$i = 100;
 do{
    $valor = readline("digite um numero: ");
    $i = ($valor == 100) ? 100 : 50;    // se nao for 100, sera 50
 }while($i < 100);
?>