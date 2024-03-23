<?php

// Arrays com notas numéricas
$nota = [
    10,
    8,
    9,
    7
];
// Criando uma cópia do array original para ordenação
$notaOrdenadas = $nota;
// Ordenando o array cópia
sort($notaOrdenadas);

echo "Desordenadas: ";
// Exibindo o array original desordenado
var_dump($nota);

echo "<br> Ordenadas: ";
// Exibindo o array ordenado
var_dump($notaOrdenadas);

// Agora vamos lidar com um array de strings
$nota = [
    "Um",
    "Dois",
    "tres",
    "Quatro"
];
// Novamente criamos uma cópia do array original para ordenação
$notaOrdenadas = $nota;
// A função sort() tentará ordenar as strings alfabeticamente
sort($notaOrdenadas);

echo "<br> Desordenadas: ";
// Exibindo o array original desordenado
var_dump($nota);

echo "<br> Ordenadas: ";
// Exibindo o array de strings ordenado alfabeticamente
var_dump($notaOrdenadas);
/*
 * Comentários adicionados:
 * - O código começa com arrays de notas, primeiro com números e depois com strings.
 * - O método sort() é usado para ordenar os arrays.
 * - sort() é eficaz para ordenar arrays numéricos e também strings (que serão ordenadas alfabeticamente).
 * - No caso de strings, as letras maiúsculas vêm antes das minúsculas.
 */

?>