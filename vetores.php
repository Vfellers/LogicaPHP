<?php

//FORMA DE PASSAR VARIAVEL NO VETOR
$frutas = [];
$fruta;

for($i = 0; $i < 5; $i++){

    $fruta = readline("Digite a fruta: ");
    // array_push($frutas, $fruta);
    $frutas[$i] = $fruta;       // vai atribuir, $frutas[posiçao 0]= $fruta vai incrementando as posiçoes com $i++
}
print_r($frutas);

//========================================================================================================

// $veiculos= [];
// $veiculo;
// $categoria;

// for($i = 0; $i < 3; $i++){  //primeiro array, categoria
    
//     $categoria = readline("Qual a categoria do veiculo? ");

//     for($x = 0; $x < 2; $x++){

//         $veiculo = readline("Informe o Modelo: ");
//         $veiculos[$i][$categoria][$x] = $veiculo;
//     }
   
// }
// print_r($veiculos);

//$veiculos = array[]           categoria é a primeira posição e o segundo array, dentro de $veiculos


//     veiculo[0](x) => Array
//         (
//             categoria[passeio] => Array
//                 (
//                     [0] => scort
//                     [1] => voyage
//                 )

//         )

//     [1] => Array
//         (
//             [suv] => Array
//                 (
//                     [0] => ecosport
//                     [1] => tiggo
//                 )

//         )

//     [2] => Array
//         (
//             [caminhonete] => Array
//                 (
//                     [0] => s10
//                     [1] => ranger
//                 )

//         )

// )



//========================================================================================================
//========================================================================================================
//========================================================================================================



//FUNÇÕES PARA ARRAY

//1- in_array - Verifica se o valor pesquisado existe dentro do array
//in_array(procurando, ondeProcuro); Retorna TRUE ou FALSE

/*
$numeros = [];
$numero;

while (count($numeros) < 10) { 
    
    $numero = readline("Digite um numero: ");
                                            //checar no array $numeros se existe o valor que digitei $numero
    if(!in_array($numero, $numeros)){       //colocou o ! pra retornar false, se nao tiver esse numero, ele insere, nao achou
        array_push($numeros, $numero);
        echo "Numero inserido.\n";

    }else{
        echo "Numero já existe.\n";         //Se retornar True, achou o numero, naopode repetir, nao adiciona
    }
}
print_r($numeros);
*/


//========================================================================================================
//                                      KEY_EXISTS
//========================================================================================================
//key_exists(o que procura, array)


// $dados = [
//     "alunos" => [],
//     "professores" => []
// ];

// var_dump(key_exists("alunos", $dados));


//========================================================================================================
//                                      EXPLODE
//========================================================================================================
//Transforma a linha toda em array baseado em um caractere, nesse caso é o espaco entre eles " "


// $meses = "janeiro fevereiro março abril maio junho julho agosto setembro outubro novembro dezembro";

// $mesesArr = explode(" ", $meses);

// print_r($mesesArr);

//========================================================================================================
//                                      IMPLODE
//========================================================================================================
//Transforma Array em string 

// echo implode(" | ", $mesesArr);


//========================================================================================================
//                                      SORT
//========================================================================================================
//Coloca os valores em forma alfabetica ou numerica, ascendente
//Nao muda a posição da chave no array, vai continuar de 0 a 11 aqui

// sort($mesesArr);
// print_r($mesesArr);

//========================================================================================================
//                                      ASORT
//========================================================================================================
//Muda tambem a posiçao, vai junto.

// asort($mesesArr);
// print_r($mesesArr);

//========================================================================================================
//                                      RSORT
//========================================================================================================
//Ordem decrescente e nao muda a posiçao do array

// rsort($mesesArr);
// print_r($mesesArr);

//========================================================================================================
//                                      MAX e MIN
//========================================================================================================
// //MAX pega o maior numero do array
// echo max([5, 8, 3]);

// //MIN pega o maior numero do array
// echo min([5, 8, 3]);

?>