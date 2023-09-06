<?php

// 1. Crie um algoritmo que, dado o nível de alerta de risco, imprima se ele for GRAVE. O
// nível de alerta é um número que varia de 0 a 10. 
// Observe as regras
// até 3 é risco baixo
// de 4 até 6 risco moderado
// de 7 a 9 risco médio
// acima de 9 grave
// considere que o intervalo será de 0 a 10

// $option = readline("Digite o nivel de alerta (0 a 10): ");

// switch($option){
//     case 0:
//     case 1:
//     case 2:
//     case 3:
//         echo "Risco Baixo";
//     break;
//     case 4:
//     case 5:
//     case 6:
//         echo "Risco Moderado";
//     break;
//     case 7:
//     case 8:
//     case 9:
//         echo "Risco Medio";
//     break;
//     case 10:
//         echo "Risco Grave";
//     break;
//     default:
//         echo "Opção invalida";
//     break;
// }



// // 2. construa um algoritmo que receba 4 notas de uma aluno, calcule a média e retorne a média final 
// // informando se o aluno está aprovado ou reprovado. para aprovação a média deve ser igual ou maior a 7

// $vetor = [];

// for ($i=0; $i < 4; $i++) { 
//     $nota = readline("Digite uma nota ".$i."/4: " );
//     $vetor[$i] = $nota;
// }

// echo "Media final: ".$media = ($vetor[0] + $vetor[1] + $vetor[2] + $vetor[3]) / 4;

// echo ($media >= 7) ? "\nAprovado" : "\nReprovado"; 



// 3. Faça um programa que leia um número inteiro e mostre o seu antecessor e seu sucessor.

// $numero = readline("Digite um numero: ");
// echo "Antecessor: ".($numero - 1)."\nSucessor: ".($numero + 1);



// 4. FAÇA UM ALGORITMO QUE LEIA UM NÚMERO ENTRE 1 E 10.
// ESCREVA O NÚMERO LIDO POR EXTENSO.
// CASO O NUMERO NÃO ESTEJA ENTRE O INTERVALO, MOSTRE NÚMERO INVÁLIDO.

// $option = readline("Digite um numero (1 a 3): ");

// switch($option){
//     case 1:
//         echo "Um";
//     break;
//     case 2:
//         echo "Dois";
//     break;
//     case 3:
//         echo "Três";
//     break;
//     default:
//         echo "Opção invalida";
//     break;
//     }

//--------------------------------------------------------------------------------------------------------

// 5. Crie um programa em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão).
// Capture 2 números.
// Realize a operação escolhida com os números informados

// $valor1= readline("Digite o primeiro valor: ");
// $valor2= readline("Digite o segundo valor: ");
// $option= readline("+, -, *, /: ");

// switch($option){
//     case "+": 
//         echo ($valor1 + $valor2);
//     break;
//     case "-":
//         echo ($valor1 - $valor2);
//     break;
//     case "*":
//         echo ($valor1 * $valor2);
//     break;
//     case "/":
//         echo ($valor1 / $valor2);
//     break;
//     default:
//         echo ("Operação invalida.");
//     break;
// }


//--------------------------------------------------------------------------------------------------------

//LACO FOR

// 1. faça um algoritmo que leia um numero (alto) e depois imprima no console cada número até o intervalo
//  informado dizendo se é par ou impar

// $numero = readline("Digite um numero: ");

// for ($i=0; $i < $numero+1; $i++) { 
//     echo $i." - ";
//     echo ($i % 2 == 0) ? "Par\n" : "Impar\n";
// }

// 2. faça um algoritmo que leia um numero e gere a tabuada do número digitado

// $numero = readline("Digite um numero: ");

// for ($i=1; $i < 11; $i++) { 
//    echo $i." x ".$numero." = ".($i * $numero)."\n";
// }



//--------------------------------------------------------------------------------------------------------
//WHILE
// 1. Faça um programa, utilizando while, que mostre na tela os números de 0 a 1000.
// $a=0;
// while ($a <= 10) {
//     echo $a."\n";
//     $a++;
// }

// 2. faça um programa que imprima somente os numeros pares até 1000.
// $a = 0;
// while ($a <= 10) {
//     if($a % 2 == 0){
//         echo $a."\n";
//     }
//     $a++;
// }


// ------------------- LAÇO DO WHILE

// 1. faça um programa que leia um numero e vá realizando soma dos valores já digitados até que o total chegue em 1000
// exemplo:

// $total = 0;
// do{
//     $valor = readline("Digite um numero: ");
//     $total = $total + $valor;
//     echo $total."\n";
// }while($total < 50);


// ----------------------------- VETORES

// 1. construa um vetor de dias da semana, e utilize o laço foreach para exibir todos os dias na tela.

$vetor = [
    0 => "Domingo",
    1 => "Segunda",
    2 => "Terça",
    3 => "Quarta",
    4 => "Quinta",
    5 => "Sexta",
    6 => "Sabado"
];

foreach ($vetor as $x) {
    echo $x."\n";
}
?>