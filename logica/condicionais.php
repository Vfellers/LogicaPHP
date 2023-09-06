<?php

//if
/* 
if(condicao){
    verdadeiro;
}else {
    false;
};
 */

$valor = readline("Digite Sua idade: ");

$resultado;
if(!is_numeric($valor)){
    $resultado = "Valor digitado nao é um numero";
} else if($valor <= 12){
    $resultado = "Você é criança";
} else if($valor > 12 && $valor<= 18){
    $resultado = "Você é jovem.";
} else if($valor > 18 && $valor <= 40){
    $resultado = "Voce é adulto";
} else if($valor > 40 && $valor < 60){
    $resultado = "Você esta na meia idade";
} else{
    $resultado = "Você anda no busao de graça";
}
print $resultado;



?>