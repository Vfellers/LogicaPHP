<?php

$alunos = [
    [//0
        "nome" => "Victor Feller",
        "turma" => "PHP1",
        "periodo" => "Noturno",
        "modo" => "Online",
        "notas" => [ //laco 2 $a
            10,      // posicao 0
            7.5,     // posicao 1
            8        // posicao 2
            ]
    ],
    [//1
        "nome" => "Joao da silva",
        "turma" => "PHP2",
        "periodo" => "Matutino",
        "modo" => "Online",
        "notas" => [10, 9, 7.8]
    ],
    [//2
        "nome" => "Sergio Arrazao",
        "turma" => "PHP3",
        "periodo" => "Noturno",
        "modo" => "Online",
        "notas" => [9, 10, 8.5]
    ]

];

//i é oincrementador
// count() conta a quantidade de registros no array

for($i = 0; $i < count($alunos); $i++){

    $totalNotas = count($alunos[$i]["notas"]);
    $media = 0;
    $somaNotas = 0;

    for($a = 0; $a < $totalNotas; $a++){
        $somaNotas = $somaNotas + $alunos[$i]["notas"][$a];
    }

    $media = ($somaNotas / 3);
    
    echo "aluno: {$alunos[$i]["nome"]} | turma: {$alunos[$i]["turma"]} | Periodo: {$alunos[$i]["periodo"]} | Modo: {$alunos[$i]["modo"]} | Média: {$media} \n";
}


//EXEMPLO
/* arrayAlunos = [
    0 => [
        DadosAluno 0,
        notas 0 => [
            notas
        ]
    ],
    1 => [
        DadosAluno 1,
        notas 1 => [
            notas
        ]
    ],
    2 => [
        DadosAluno 2,
        notas 2 => [
            notas
        ]
    ]
] */



// primeiro for
/* for(inicioAluno; PercorreArrayAluno; incrementoAluno){

    segundo for
    for(inicoNotas; PercorreArrayNotas; IncrementaNota){
        calcuarMedia
    }

    listagem dos dados do aluno
} */
?>