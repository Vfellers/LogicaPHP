<?php
// 6. Desenvolva um vetor que armazene os valores de referencia para as medidas polegadas, km, jardas e milha.
// solicite um valor de medidas em centimetros para o usuário epercorra o array fazendo a conversão destas medidas.
// ex
// 1m = 100cm (centimetros)
// 1m = 1000mm (milímetros)

$medidas = [
    "pol" => 0.39,              //0
    "km" => 0.00001,            //1 
    "Jardas" => 0.0109361,      //2
    "milha" => 0.0000062137     //3
];

$valor = readline("Valor em Centimetros: ");
                                                         //unidade é o  "pol", "km", "jardas" e "milhas"
foreach($medidas as $unidade =>$conversao){              //medidas (unidade é a posiçao ($i))
    echo "{$valor} em {$unidade} =".($valor * $conversao)."\n";
}

?>