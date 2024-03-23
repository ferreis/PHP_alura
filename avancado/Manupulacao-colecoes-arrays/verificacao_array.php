<?php
// Definição de um array associativo de notas
$notas = [
    'Vinicius' => 6,
    'joao' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

// Definição de um array numérico sequencial
$array = [
    0 => 'um',
    1 => 'dois',
    2 => 'Tres',
];

// Ordena o array $notas em ordem reversa pelas chaves
krsort($notas);

// Exibe o conteúdo do array $notas após a ordenação
var_dump($notas);

// Verifica se $notas é um array
if (is_array($notas)) {
    echo 'Sim, é um array ';
}

var_dump(array_is_list($array));
//A função array_is_list determina se o array fornecido é uma lista. Um array é considerado uma lista se suas chaves consistirem em números consecutivos de 0 a count($array) - 1