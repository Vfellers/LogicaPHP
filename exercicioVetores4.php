<?php
// 4. faça um vetor que armazene numeros sequenciais entre 01 e 60
// de posse do vetor execute um sorteio que deverá apresentar 6 posições sorteadas aleatorieamente. 
// Dica: utilize a função rand(inicio, fim)
// o resultado deverá ser apresentado como ex: 08 10 34 19 60 07
// deverá ter um zero a esquerda para numeros menores que 10.

$valores = [];

for ($i=1; $i < 61; $i++) { 
    $valor = $i;
    array_push($valores, $valor);
}
$sorteio = "";
for ($x=0; $x < 6; $x++) { 
    $sorteio .= str_pad($valores[rand(0, 59)],1,0, STR_PAD_LEFT)." ";
    // $sorteio .= str_pad($valores[rand(0, 59)],2,"0", STR_PAD_RIGHT)." ";
}
echo $sorteio;




?>