<?php
/*
 $variavelSemValor;
 $variavelComValor = 10;

 CONSTANTES: Não inicia sem valor e nao pode ser alterado.
 Nome em CAIXA_ALTA
 const NOVA_CONSTANTE = 100;

 ----------------------------------------------------------------------------
 
 RESTO DIVISAO %

 ----------------------------------------------------------------------------
 
 OPERADORES RELACIONAIS

 == IGUAL A (A == A)  1==1 RETORNA TRUE
 === VERIFICA TIPO E VALOR (1 === "1" ) RETORNA FALSE, UM INTEIRO E UM INT
 != DIFERENTE DE
 !==  DIFERENTE DE TIPO E VALOR
 .= 


 PAR ou IMPAR
 (4 % 2 == 0) ? "par" : "impar"

 OPERADOR LOGICO: and && -- OR ||  

 ----------------------------------------------------------------------------

 IF ABREVIADO   /--/ 
 (condição) ? true : false;
 ? represeta if
 : representa o else

 echo ($sexo == 'M') ? 'Masculino' : 'Feminino';
 Se sexo for igual a "M", escreva "Masculino" senao escreva "Feminino"

 echo($nome) ?: "sem nome";
 Se nome tiver algum valor, escreve o valor, senao escreve "sem nome"

-----------------------------------------------------------------------------

 SWITCH CASE - Escolha

 $option = readline("Digite a opçao desejada: );
 
 switch($option){
    case 0:
        //codigo
    break;
    case 1:
        //codigo
    break;
    default:
        Mensagem padrao se nenhum caso for escolhido.
    break;

------------------------------------------------------------------------------

date('d') retorna o dia
date('w') retorna o dia da semana de 0 a 6 onde 0 é domingo e 6 é sábado
date('n') retorna o mês onde 1 é janeiro e 12 é dezembro
date('Y') retorna o ano com 4 digitos
VER exercicio 9 de Logica

------------------------------------------------------------------------------

REPETIÇAO:
for(x=0; x < quantas vezes repete; x++){
    O que será repetido ate o x chegar no valor;
}

while(condicao){
    Repete enquanto a condição nao for atendida;
}

do while: faz uma vez antes de iniciar o laço
do{
    codigo;
    $continua = readline("Deseja fazer novo calculo? s/n ");
}while($continua == "s");

*Faz a primeira vez o codigo e pergunta se quer fazer de novo. Se sim, repete, se nao, para.

------------------------------------------------------------------------------




------------------------------------------------------------------------------

OPERADORES DO PHP

is_numeric($valor) - Verifica se a variavel $valor é um número. Retorna TRUE.


print_r($vetor) - imprime o vetor todo


in_array - Verifica se o valor pesquisado existe dentro do array
in_array($string, $vetor);


key_exists - procurar a chave do array, a posição (TRUE or FALSE)


EXPLODE - Transforma a linha toda em array
$meses = "janeiro fevereiro março abril maio";
$arrayMeses = explode(" ", $meses);

IMPLODE - Transforma Array em string 
echo implode(" | ", $mesesArr);
Vai separar os meses com o |  $meses = "janeiro | fevereiro | ...;


SORT - Coloca os valores em forma alfabetica ou numerica, ascendente
Nao muda a posição da chave no array [0]- 1 | [1]- 2  | [3]- 3

RSORT - Ordem decrescente. Nao muda o array.

ASORT - A posiçao tambem vai junto. [9]- 1 | [4]- 2 | [6]- 3


MIN e MAX
MAX pega o maior numero do array    echo max([5, 8, 3]); volta 8
MIN pega o maior numero do array    echo min([5, 8, 3]); volta 3


RANDON - numeros aleatorios dentro do intervalo         $valores[$l] = rand(1, 10);
 

ARRAY_SUM - Soma os valores dentro do array             array_sum($valores) 


COUNT() - conta quantos valores tem no vetor            count($valores)


STR_PAD - coloca o numero de casas vai imprimir.
$input = "Alien";                                 1234567  
echo str_pad($input,  7, "___");     // produces "Alien__"
echo str_pad($input, 7, "--", STR_PAD_LEFT);  // produces "--Alien"     (left poe á esquerda e right á direita)  
echo str_pad($valor, 3, ".00", STR_PAD_RIGHT); //  coloca 2 zeros atras do numero mas nem sempre


ARREDONDAR
round($valor);


UNICO - só deixa passar um numero, sem repetidos.
array_unique($valores)


*/
?>