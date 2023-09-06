<?php
// 15. Crie um programa onde você irá cadastrar os seus familiares com nome e idade de cada um, considere cadastrar crianças, jovens, adultos e idosos.
// Você precisará identificar o valor a ser pago por um plano de saúde dada a idade do familiar. Considere que todos pagam R$ 100 no plano, mais um adicional conforme a seguinte tabela: 
// > crianças com menos de 10 anos pagam + R$80; 
// > conveniados com idade entre 10 e 30 anos pagam + R$50; 
// > conveniados com idade entre 40 e 60 anos pagam + R$ 95;
// > conveniados com mais de 60 anos pagam + R$130.

$pessoas = [];

for ($i=0; $i < 4; $i++) { 
    
    $nome = readline("Nome: ");
    $idade = readline("Idade: ");

    $pessoas[$i]["nome"]= $nome;
    $pessoas[$i]["idade"] =$idade;
}

$valor = 100;
foreach($pessoas as $pessoa){
    if ($pessoa["idade"] < 10){
        $total = ($valor + 80);
        echo "\nNome: ".$pessoa["nome"]." Valor R$".$total;

    } else if ($pessoa["idade"] >= 10 && $pessoa["idade"] <= 30){
            $total = ($valor + 50);
            echo "\nNome: ".$pessoa["nome"]." Valor R$".$total;

    } else if ($pessoa["idade"] > 30 && $pessoa["idade"] < 61){
        $total = ($valor + 95);
        echo "\nNome: ".$pessoa["nome"]." Valor R$".$total;
    
    } else if ($pessoa["idade"] > 60){
        $total = ($valor + 130);
        echo "\nNome: ".$pessoa["nome"]." Valor R$".$total;
    } 
}
?>