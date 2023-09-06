<?php
    //----------------------------------------------------------------------------------------------//

$sexo = "M";
// (condição) ? true : false;              
echo ($sexo == 'M') ? 'Masculino' : 'Feminino';

//? represeta if
//: representa o else


$idade = 38;
$situacao = ($idade >=18) ? "Maior" : "menor";
echo "Sou {$situacao} de idade";

//----------------------------------------------------------------------------------------------//


// IF SHORT FORM
// Se $nome for null, ele escreve sem nome, senao escreve onome de $nome
$nome;

echo($nome) ?: "sem nome";

//----------------------------------------------------------------------------------------------//

//PAR ou IMPAR
echo (4 % 2 == 0) ? "par" : "impar";

//----------------------------------------------------------------------------------------------//
//SWITCH CASE
$option = 100;
switch($option){
    case 0:
        //codigo
    break;
    case 10:
        //codigo
    break;
    case 20:
    case 30:
    case 40:
        //codigo
    break;
    default:
        //codigo
    break;
}

$dia = date("w");

switch($dia){
    case 0: 
    case 6:
        echo "Fim de semana";
    break;
    case 1: 
    case 2: 
    case 3:
    case 4:
        echo "Dia de semana";
    break;
    case 5:
        echo "SEXTOU";
    break;
}

?>