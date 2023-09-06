<?php

$estados = [
    ["estado" => "Acre", "capital" => "Rio Branco"],
    ["estado" => "Alagoas", "capital" => "Maceio"],
    ["estado" => "Amapá", "capital" => "Macapá"],
    ["estado" => "Amazonas", "capital" => "Manaus"],
    ["estado" => "Bahia", "capital" => "Salvador"],
    ["estado" => "Ceará", "capital" => "Fortaleza"],
    ["estado" => "Distrito Federal", "capital" => "Brasilia"],
    ["estado" => "Espírito Santo", "capital" => "Vitoria"],
    ["estado" => "Goiás", "capital" => "Goiania"],
    ["estado" => "Maranhão", "capital" => "Sao luiz"],
    ["estado" => "Mato Grosso", "capital" => "Cuiaba"],
    ["estado" => "Mato Grosso do Sul", "capital" => "Campo Grande"],
    ["estado" => "Minas Gerais", "capital" => "Belo Horizonte"],
    ["estado" => "Pará", "capital" => "Belem"],
    ["estado" => "Paraíba", "capital" => "Joao Pessoa"],
    ["estado" => "Paraná", "capital" => "Curitiba"],
    ["estado" => "Pernambuco", "capital" => "Paraiba"],
    ["estado" => "Piauí", "capital" => "Terezina"],
    ["estado" => "Rio de Janeiro", "capital" => "Rio de Janeiro"],
    ["estado" => "Rio Grande do Norte", "capital" => "Natal"],
    ["estado" => "Rio Grande do Sul", "capital" => "Porto Alegre"],
    ["estado" => "Rondônia", "capital" => "Porto Velho"],
    ["estado" => "Roraima", "capital" => "Boa Vista"],
    ["estado" => "Santa Catarina", "capital" => "Floripa"],
    ["estado" => "São Paulo", "capital" => "Sao Paulo"],
    ["estado" => "Sergipe", "capital" => "Aracaju"],
    ["estado" => "Tocantins", "capital" => "Palmas"]
];

//FOR EACH

foreach($estados as $estado){
    echo "Estado: {$estado["estado"]}";
    echo " | Capital: {$estado["capital"]} \n";
}

?>