<?php

// Definindo a string original
$texto = "Texto com qualquer coisa poxa e caramba. </br>";

// Utilizando a função str_replace para substituir palavras
echo str_replace(
    // Definindo as palavras a serem substituídas
        ['poxa', 'caramba'],
        // Definindo as palavras de substituição
        ['p', 'c'],
        // Definindo a string original como referência
        $texto
    ) . PHP_EOL;

// Utilizando a função strtr para substituir caracteres
echo strtr($texto, 'poxa', '**@*') . PHP_EOL;

// Observação importante: STRTR não é STRSTR!
// STRTR é usado para substituir caracteres, enquanto STRSTR é usado para encontrar substrings.

// Exemplo da documentação do PHP para strtr
$trans = ["hello" => "hi", "hi" => "hello"];
echo strtr("hi all, i said hello", $trans);
echo "</br>";
echo str_replace(['hello', 'hi'],['hi', 'hello'], 'hello all, i said hello') . PHP_EOL;

