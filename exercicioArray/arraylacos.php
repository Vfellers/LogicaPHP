<?php

$diasSemana = [
    "Domingo", 
    "Segunda",
    "Terca",
    "Quarta",
    "Quinta",
    "Sexta",
    "Sabado"
];

// for($i = 0; $i > count($diasSemana); $i++){
//     echo "{$diasSemana[$i]} \n";
// }


// $i=0;
// while($i < cont($diasSemana)){
//     echo "{$diasSemana[$i} \n";
//     $i++
// }



// FOR EACH ($array as $linha){}

// foreach($diasSemana as $dia){
//     echo " {$dia} \n";
// }


// // Traz a posição junto
// foreach($diasSemana as $chave => $dia){     
//     echo "{$chave} => {$dia} \n";
// }



//======================================================================================================================


//FUNCOES DE ARRAYS

// $frutas = [];

// //PUSH
// $fruta = readline("Digite sua fruta favorita: ");

// // passa o array e o objeto. Criei um array vazio e insiro o dado depois
// array_push($frutas, $fruta);

// print_r($frutas);


// $frutas = [];
// $i=0;

// while(count($frutas) < 10){
//     $fruta = readline("\nDigite sua fruta favorita: ");
//     array_push($frutas, $fruta);
//     echo ($frutas[$i]);                 //cada vez incrementa o i, entao chama o vetor $frutas[0] item 1, passa mais uma posiçao $frutas[1] item 2
//     $i++;
// }

// print_r($frutas);



//-----------------------------/Array reverso-----------------------------------------------------------
// faz ao contrario, sabado no comeco e domingo pro fim
$diasSemana = [
    "Domingo", 
    "Segunda",
    "Terca",
    "Quarta",
    "Quinta",
    "Sexta",
    "Sabado"
];

//print_r(array_reverse($diasSemana));


//-----------------------------/Array Shift-----------------------------------------------------------
// Remove primeiro item
// array_shift($diasSemana);
// print_r($diasSemana);


//-----------------------------ASORT-----------------------------------------------------------------
//embaralha a lista
asort($diasSemana);
print_r($diasSemana);


//-----------------------------IN_ARRAY-----------------------------------------------------------------
// Procura o valor dentro do array        // Se tem volta True, senao False
$tem = in_array("Domingos",$diasSemana);
var_dump($tem)
?>