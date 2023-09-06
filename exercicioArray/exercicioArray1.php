<?php

// 1. Crie um vetor que armazene o nome de todos os meses do ano.
// Peça ao usuário que digite um número e ele informe qual o nome do 
// mês correspondente.

$meses = [
    "Janeiro", //0
    "Fevereiro",
    "Marco",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro" //11
];

$numero = readline("Digite um numero de 1 a 12: ");

echo $meses[$numero-1];
?>