<?php
// 14. Crie um algoritmo de mercado online onde você deverá cadastrar 10 itens com seus respectivos valores.
// - realizar uma operação de compra onde o usuário realizará a compra de um item, buscando pelo nome, e se 
// encontrado o item, adicionará ao carrinho.
// No final mostre a compra com os itens adicionados somando o valor do pedido.

$total=0;
$estoque = [];

for ($i=0; $i < 5; $i++) { 
    $produto = readline("Produto: ");
    $preco = readline("Preco: ");

    $estoque[$i]["produto"] = $produto;
    $estoque[$i]["preco"] = $preco;
}

print_r($estoque);

//Compra
echo "---------------VENDA---------------------\n";

foreach($estoque as $x) { 
    $prodVenda = readline("Nome do produto: ");
    if($prodVenda == $x["produto"]){
        $venda[] = $x; 
    }else{
        echo "Produto nao cadastrado\n";
    };
}

echo "\nCarrinho: \n";
foreach ($venda as $v) {
    echo "Produto: ".$v["produto"]." | Preço: ".$v["preco"]."\n"; 
    $total = $total + $v["preco"];
}

echo "Valor Total = ".$total;

?>