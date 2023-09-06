<?php
$carros = [
    [ //Veiculo 0
        "modelo" => "Gol",
        "cor" => "Preto",
        "registro" => [
            "placa" => "ABC1234",
            "renavam" => "12345678901",
            "proprietario" => [
                [
                    "nome" => "Joao da Silva",
                    "CPF" => "123.456.987-00"
                ],
                [
                    "nome" => "Daniel Lascado",
                    "CPF" => "555.456.987-55"
                ]
            ]
        ]
    ],
    [ //Veiculo 1
        "modelo" => "Fiesta",
        "cor" => "Verde",
        "registro" => [
            "placa" => "BCA2234",
            "renavam" => "12342348908",
            "proprietario" => [
                [
                    "nome" => "Maria da Silva",
                    "CPF" => "321.456.987-01"
                ],
                [
                    "nome" => "Jose da Silva",
                    "CPF" => "321.488.987-88"
                ]
            ]
        ]
    ],
    [ //Veiculo 2
        "modelo" => "Megane",
        "cor" => "Beje",
        "registro" => [
            "placa" => "AHF1734",
            "renavam" => "12245678901",
            "proprietario" => [
                [ 
                    "nome" => "Diego Barellos",
                    "CPF" => "123.456.911-45"
                ]
            ]
        ]
    ]
];



$primeiroContador = 0;
$quantPrimeiroArray = count($carros);

while($primeiroContador < $quantPrimeiroArray){

    echo "Modelo: {$carros[$primeiroContador]["modelo"]} | ";
    echo "Cor: ".$carros[$primeiroContador]["cor"]." | ";
    echo "Placa: {$carros[$primeiroContador]["registro"]["placa"]} | ";
    echo "Renavam: {$carros[$primeiroContador]["registro"]["renavam"]} | ";
    //Inicio laco repetiçao proprietarios

    $segundoContador = 0;
    $quantidadeSegundoArray = count($carros[$primeiroContador]["registro"]["proprietario"]);
    
    while($segundoContador < $quantidadeSegundoArray){
        echo "Proprietario: {$carros[$primeiroContador]["registro"]["proprietario"][$segundoContador]["nome"] } | ";
        echo $primeiroContador;
        $segundoContador++;
    }

    //Fim Laço proprietarios
    echo "\n";
    $primeiroContador++;

}



?>