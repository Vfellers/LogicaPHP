<?php
// 5. uma lanchonete está precisando agilizar o atendimento, faça um algoritimo que receba o cadastro de 
//10 produtos com a quantidade e o valor unitário de cada um. Retorne a lista dos produtos cadastrados 
// com o valor unitário e o valor total de cada produto calculado e no final da lista o total da compra

// $produtos = [];
// $valores = [];
// $quantidades = [];
// $i = 0;
// $a = 0;

// while(count($produtos) < 3 ){
//     $produto = readline("Produto : ");
//     array_push($produtos, $produto);
//     $valor = readline("Valor: ");
//     array_push($valores, $valor);
//     $quantidade = readline("Quantidade: ");
//     array_push($quantidades, $quantidade);
// }
// $total = 0;
// echo "Produto | Preço | Quantitade | Valor |\n";
// for($i = 0; $i < 3; $i++){
//     $totalProd = $valores[$i] * $quantidades[$i];
//     echo ($i+1).". ".$produtos[$i]." | R$".$valores[$i]." | ".$quantidades[$i]." | R$".$totalProd."|\n";
//     $total = $totalProd + $total;
// }

// echo "Valor total da venda: R$".$total;

$produtos = [];
$produto;
$valorUnitario;
$quantidade = 0;
$valorTotal = 0;

for($i = 0; $i < 3; $i++){

    $produto = readline("Produto : ");
    $valorUnitario = readline("Valor: ");
    $quantidade = readline("Quantidade: ");

    array_push($produtos, [
        "produto" => $produto, 
        "valor" => $valorUnitario, 
        "quantidade" => $quantidade 
    ]);
}

//Listar produtos

foreach($produtos as $carrinho){

    echo "PRODUTO: {$carrinho["produto"]}";
    echo " VALOR UNITARIO: {$carrinho["valor"]}";
    echo " QUANTIDADE: {$carrinho["quantidade"]}";
    echo " TOTAL R$: ".($carrinho["valor"] * $carrinho["quantidade"])."\n";
}

?>