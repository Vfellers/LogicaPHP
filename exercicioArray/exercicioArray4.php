<?php
// 4. Crie dois vetores, cada um com capacidade para armazenar 10 números.
// Solicite ao usuário que entre com os valores nestes dois vetores.
//Programa deverá mostrar a multiplicação dos dados dos vetores, em cada um de suas respectivas posições.

$valores1 = [];
$valores2 = [];
$i = 0;
$a = 0;

while($i < 3 ){
    $valor1 = readline("Digite um numero para a primeira coluna: ");
    array_push($valores1, $valor1);
    $valor2 = readline("Digite um numero para a segunda coluna: ");
    array_push($valores2, $valor2);
    $i++;
}

for($a = 0; $a < 3; $a++){
    $total = $valores1[$a] * $valores2[$a];
    echo $valores1[$a]." x ".$valores2[$a]." = ".$total."\n";
}

?>