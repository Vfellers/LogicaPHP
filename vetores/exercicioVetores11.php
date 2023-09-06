<?php
// 11. Faça um vetor com 100 números aleatórios.
// crie um novo vetor somente com números ímpares e um com números pares

$vetorA = [];                               
for ($i=0; $i < 100; $i++) { 
    $vetorA[$i] = rand(0, 100);
}


for ($x=0; $x < 100; $x++) { 
    if ($vetorA[$x] % 2 == 0){
        $vetorB[$x] =$vetorA[$x]; 
    }
}

for ($y=0; $y < 100; $y++) { 
    if ($vetorA[$y] % 2 ==! 0){
        $vetorC[$y] = $vetorA[$y]; 
    }
}

print_r ($vetorB);
print_r ($vetorC);

?>