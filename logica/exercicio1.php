<?php

$valor = readline("Digite um dia da semana (0 a 6, sendo 0 = domingo)");


if(!is_numeric($valor)){
    $resultado = "Valor digitado nao é um numero";
 } else if($valor == 5 ){
    $resultado = "Sextou!!";
 }else if($valor == 6 || $valor == 0){
    $resultado = "Fim de semana";
 }else if( $valor >= 1 && $valor <= 5){
    $resultado = "Dia util";
 } else{
    $resultado = "Nao é um dia da semana";
 }
print $resultado;


//----------------------------------------------------------------------------


//Exercicio 2
//  $v1= readline("Digite o primeiro valor: ");
//  $v2= readline("Digite o segundo valor: ");

//  $resultado = ($v1 + $v2);

//  echo $resultado;


//----------------------------------------------------------------------------


//Exercicio 3
// $preco1 = 1.30;
// $preco2 = 1;
// $quantidade= readline("Digite a quantidade de maçãs: ");

//  $resultado;
//  if(!is_numeric($quantidade)){
//      $resultado = "Valor digitado nao é um numero";
//  } else if($quantidade >= 12){
//      $resultado = $preco2 * $quantidade; 
//  } else if($quantidade < 12){
//      $resultado = $preco1 * $quantidade;
//  }

//  echo "Preço final: ".$resultado." Reais.";


//----------------------------------------------------------------------------


//Exercicio 4

// $nivel = readline("Digite o nivel de alerta (0 a 10): ");

// $alerta;
// if(!is_numeric($nivel)){
//     $alerta = "Nivel digitado nao é um numero";
//  } else if($nivel <= 3){
//     $alerta = "Nivel de risco: BAIXO";
//  } else if($nivel >=4 && $nivel <= 6){
//     $alerta = "Nivel de risco: MODERADO";
//  } else if($nivel > 6 && $nivel <10){
//     $alerta = "Nivel de risco: MEDIO";
//  }else if($nivel = 10){
//     $alerta = "Nivel de risco: GRAVE";
//  } else{
//     $alerta = "Numero digitado esta fora da escala de risco";
//  }

//  print $alerta;


//----------------------------------------------------------------------------


//Exercicio 5

// $n1 = readline("Primeira nota: ");
// $n2 = readline("Segunda nota: ");
// $n3 = readline("Terceira nota: ");
// $n4 = readline("Quarta nota: ");

// $media = ($n1 + $n2 + $n3 + $n4) / 4;

// print "Media final: ".$media;

// if($media >= 7){
//     $resultado = " - Aprovado! :D";
// } else{
//     $resultado = " - Reprovado :(";
// }

// echo $resultado;


//----------------------------------------------------------------------------


//Exercicio 6

// $valor = readline("Digite um numero inteiro: ");

// $antecessor = $valor - 1;
// $sucessor = $valor + 1;

// echo "Numero digitado: ".$valor." // Antecessor: ".$antecessor." // Sucessor: ".$sucessor;

//// echo "Numero digitado: {$valor} // Antecessor: {$antecessor} // Sucessor: ($sucessor}";

?>