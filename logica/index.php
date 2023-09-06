<?php
    echo "Hello World";
    

    //DEFININDO VARIAVEL SEM VALOR - NULL
    $variavelSemValor;
    $variavelComValor = 10;
    
    $varInteiro = 100;
    $varReal = 100.60;                // utilizar ponto
    $varString = "texto ou numero";   // pode usar aspas simples ou duplas
    $varString2 = "texto que tenha doca's passa"; // se tiver que escrever entre aspas, usa simples 'vito é "foda"'
    
    $varBoleana = false;  //true or false

    /**
     *CONSTANTES: Não inicia sem valor e nao pode ser alterado.
     *Nome em CAIXA_ALTA
     */ 

     //declarar constante forma 1:
     define("MINHA_CONSTANTE", 10);

     //forma 2:
     const NOVA_CONSTANTE = 100;


     //ATRIBUICAO:
     /**
      * ADIÇAO +=
      * SUBTRAÇAO -=
      * MULTIPLICAÇÃO *=
      * DIVISAO  /=
      * RESTO DIVISAO %
      */

     /**
      * OPERADORES RELACIONAIS
      * == IGUAL A (A == A)  1==1 RETORNA TRUE
      * === VERIFICA TIPO E VALOR (1 === "1" ) RETORNA FALSE, UM INTEIRO E UM INT
      *
      * != DIFERENTE DE
      * !==  DIFERENTE DE TIPO E VALOR
      */

       /**
        * OPERADOR LOGICO
        * and &&
        * OR ||  
        */ 
      
      var_dump(1 !== "2");

/*  $megaSena = 35;

    $megaSena += 2;  //  IGUAL FAZER $megasena + 2;

    echo $megaSena;
 */
     




?>
