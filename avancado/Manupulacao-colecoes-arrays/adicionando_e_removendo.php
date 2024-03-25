<?php
// Aqui estão sendo definidos dois arrays que representam os alunos de 2023 e os novos alunos de 2024.
$alunos2023 = [
    0 => 'Vinicius',
    1 => 'joao',
    2 => 'Ana',
    3 => 'Roberto',
    4 => 'Maria',
    5 => 'Luca',
];
$novosAlunos = [
    6 => 'Patricia',
    7 => 'Nicolas',
    8 => 'Rafael',
    9 => 'Kilderson',
];

// Aqui, estamos combinando os dois arrays anteriores e adicionando 'Carlos' no meio.
// O operador '...' é usado para "desempacotar" os arrays.
// Esta é uma forma de adicionar elementos de um array existente a um novo array.
$alunos2024 = [...$alunos2023,'Carlos',...$novosAlunos];

// A função array_push é usada para adicionar vários elementos ao final do array.
// Esta é uma forma de adicionar múltiplos elementos ao final de um array.
array_push($alunos2024, 'Alice', 'Alex', 'Bob', 'Charlie');

// Aqui, estamos adicionando 'Luiz' ao final do array usando a sintaxe de colchetes vazios.
// Esta é uma forma de adicionar um único elemento ao final de um array.
$alunos2024[] = 'Luiz';

// A função array_unshift é usada para adicionar elementos ao início do array.
// Esta é uma forma de adicionar múltiplos elementos ao início de um array.
array_unshift($alunos2024, 'Stephane', 'Rafaela');
var_dump($alunos2024);
?>
