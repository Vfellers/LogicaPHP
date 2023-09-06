<?php
// 3. Digite 10 valores númericos e armazene em um vetor. Em seguida, solicite ao usuário um número
// para multiplicar todos os elementos do vetor.
// O programa deverá exibir o resultado da multiplicação do número dado pelo usuário em todos os
// elementos armazenados.

$valores = [];

while(count($valores) < 3){
    $valor = readline("Digite um numero: ");
    array_push($valores, $valor);
}

$mult = readline("Digite um numero multiplicador: ");

for($i = 0; $i < 3; $i++){
    $total = $valores[$i] * $mult;                       //total = valores[1 e acrescenta]
    echo $valores[$i]." x ".$mult." = ".$total."\n";
}


//Como o Professor fez
// foreach($valores as $calc){  //vai jogar no calc os valores com o ($i) já adicionado. posiçao 1 joga no calc
//     echo "{$calc} x {$mult} = ".($calc * $mult)." \n";
// }
?>