<?php
//array = lista no java  ------- array, lista, matriz, vetor sao outros nomes  
// Conjunto de dados ordenados

// $meuArray = array(chave => valor);
// $meuArray = array(1, 2, 3);               
// /**
//  * pos 0 valor = 1
//  * pos 1 valor = 2
//  * pos 2 valor = 3
//  */
// var_dump($meuArray);

// // atribuir a posição na lista
// $meuArray = array(1 => 1, 2 => 2, 3 => 3);
// //ou
// $meuArray = array(1 => 1, 2, 3);
// var_dump($meuArray);


// //Array CURTO        mesma coisa, só nao precisa escrever array e parenteses, poe só []
// $arrayShort = [2, 3, 4];
// var_dump($arrayShort);


// $diasSemana = [
//     "Domingo", 
//     "Segunda",
//     "Terca",
//     "Quarta",
//     "Quinta",
//     "Sexta",
//     "Sabado"
// ];

// echo $diasSemana[date("w")];


// o porque de mudar o inicio nao ser zero, nesse caso usou nomes(strings). atribuiu nomes apenas
// $diego = [
//     "altura" => 1.75,
//     "peso" => 79,
//     "corPreferida" => "Azul",
//     "salarioSonho" => 10.000
// ];

// echo $diego["peso"];

//-------------------------------------------------------------------------------------------------

//Array Bidimensional (MATRIZ)

// $arrayBidimensional =[
//     ["nome" => "vito", "profissao" => "programador"],    // 0
//     ["nome" => "joao", "profissao" => "designer"]        // 1
// ];

// echo $arrayBidimensional[1]["profissao"];  // pego a profissao do segundo array, posição 1

//-------------------------------------------------------------------------------------------------

$carros = [
    [
        "modelo" => "Gol",
        "marca" => "VW",
        "ano" => 2020,
        "informacoes" => [
            "placa" => "BCB7255",
            "renavam" => "12345678901",
            "valor" => "50.500"
        ],
        "opcionais" => [
            "motor" => [
                "combustivel" => "flex",
                "potencia" => [
                    "gasolina" => "75hp",
                    "alcool" => "78hp"
                ]
            ],
            "seguranca" => [
                "airbag" => true,
                "abs" => true,
                "blindagem" => false,
                "cinto" => "3 pontos"
            ],
            "transmissao" => "manual",
            "conforto" => [
                "som ambiente" => true,
                "arCondicionado" => false,
                "couro" => true,
                "piloto" => true
            ]
        ]
    ]
];

//Vai entrando até o item que eu quero, gasolina   [0] -> ["opcionais"] -> ["motor"] -> ["potencia"] ->["gasolina"]
// print_r ($carros[0]["opcionais"]["motor"]["potencia"]["gasolina"]);




?>
