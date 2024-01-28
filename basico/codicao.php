<?php
// Este código PHP determina se uma pessoa pode ou não entrar em um local com base na idade,
// número de pessoas e uma condição adicional.

// Condições em PHP são usadas para tomar decisões com base em avaliações verdadeiras ou falsas.
// Neste código, diferentes mensagens são exibidas dependendo da idade, do número de pessoas e
//de uma condição adicional.

// Em PHP, && e AND são equivalentes, assim como || e OR.
// A diferença principal é a precedência, onde && tem precedência mais alta do que AND,
// e || tem precedência mais alta do que OR. Estes operadores são usados para combinar condições
// e determinar a lógica de controle de fluxo.
$idade = 16;
$numeroPessoas = 2;
$testeTerminal = false;

echo "Você só pode entrar se tiver a partir de 18 anos, ou a partir 16 anos acompanhado" . PHP_EOL;

if (($idade >= 18 or $idade >= 16 and $numeroPessoas > 1) && $testeTerminal == true) {
    if($idade < 18){
        echo "Você está acompanhado e ";
    }
    echo "você tem $idade anos, você pode entrar" . PHP_EOL;
} else if ($testeTerminal == true) {
    echo "Você tem $idade anos, você não pode entrar" . PHP_EOL;
} else if (($idade >= 18 or $idade >= 16 and $numeroPessoas > 1) && $testeTerminal == false) {
    if($idade < 18){
        echo "<br> Você está acompanhado e ";
    }
    echo "<br> Você tem $idade anos, você pode entrar";

} else{
    echo "<br> Você tem $idade anos, você não pode entrar";
}

