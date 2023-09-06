<?php
// 5. Faça um programa para ler entre 3 e 5 notas de 5 alunos e armazene num vetor, calcule 
//e imprima a media de cada aluno mostrando se está aprovado ou reprovado no seguinte modelo.
 
// NOME: DIEGO | NOTAS: 8, 10, 7.5, 9 | MÉDIA: 8.6 | SITUAÇÃO: APROVADO
// dica: utilize a função round(8.621, 2) para areedondar a média

// $alunos = [];
// $aluno;
// $nota;

// $quant = readline("Quantas notas desejas inserir? (de 3 a 5): " );

// for ($i=0; $i < 2; $i++) { 
//     $aluno = readline("Aluno: "); 
//     array_push($alunos, $aluno);

//         for ($x=0; $x < $quant; $x++) { 
//             $nota = readline("Notas: ");
//             $alunos[$i][$aluno][$x] = $nota;;
//         }


// }
// print_r($alunos);

$alunos = [];
$aluno;
$notas;

for ($i=0; $i < 2; $i++) { 
    
    $aluno = readline("Aluno: ");
    $notas = readline("Notas separadas por virgula: ");

    $alunos[$i]["nome"] = $aluno;
    $alunos{$i}["notas"] = explode(",", $notas);
}

//Gerar relatorio:
echo "------------ALUNOS-----------\n";

$mediaAluno = 0;

foreach($alunos as $aluno){
    $notasAluno = implode(", ", $aluno["notas"]);
    $mediaAluno = round(array_sum($aluno["notas"]) / count($aluno["notas"]), 2);
    $situacao = ($mediaAluno >= 7) ? "APROVADO" : "REPROVADO";
    echo "NOME: {$aluno["nome"]} | NOTAS: {$notasAluno} | MÉDIA: {$mediaAluno} | SITUAÇÃO: $situacao\n";
}





/* //(
    [0] => Array
        (
            [nome] => a
            [notas] => Array
                (
                    [0] => 5
                    [1] => 4
                    [2] => 5
                )

        )

    [1] => Array
        (
            [nome] => b
            [notas] => Array
                (
                    [0] => 5
                    [1] => 4
                    [2] => 10
                )

        )

) */
?>