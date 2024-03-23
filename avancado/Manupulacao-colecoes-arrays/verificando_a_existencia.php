<?php
// Definição de um array associativo de notas
// Aqui, um array associativo chamado $notas é definido. As chaves são nomes de estudantes e os valores são suas notas
$notas = [
    'Vinicius' => 6,
    'joao' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
    'Rafael' => null,
];

// A função krsort() é usada para ordenar o array $notas em ordem decrescente com base nas chaves.
krsort($notas);

// A função var_dump() é usada para exibir informações estruturadas sobre uma ou mais expressões.
// Aqui, ela exibe o conteúdo do array $notas.
var_dump($notas);

// A função is_array() verifica se a variável fornecida é um array.
// Se $notas for um array, a string 'Sim, é um array' será exibida.
if (is_array($notas)) {
    echo 'Sim, é um array '.PHP_EOL;
}

// A função array_is_list() verifica se o array fornecido é uma lista. Uma lista é um array com chaves que consistem em
// números consecutivos de 0 a count($array) - 1.

var_dump(array_is_list($notas));

// A função array_key_exists() verifica se a chave especificada, 'Vinicius', existe no array $notas.
var_dump(array_key_exists('Vinicius', $notas));

// A função isset() verifica se a variável fornecida está definida e não é NULL.
// Aqui, ela verifica se a chave 'Rafael' no array $notas está definida e não é NULL.
echo 'Rafael fez a prova: '.PHP_EOL;
var_dump(isset($notas['Rafael']));

// A função in_array() verifica se um valor existe em um array. Aqui, ela verifica se o valor 10 existe no array $notas.
echo 'Alguem tirou nota 10?'.PHP_EOL;

// A comparação é feita de forma não estrita, ou seja,
// se o array $notas contiver um valor que seja igual a 10 após a conversão de tipo, a função retornará true.
var_dump(in_array(10, $notas));

echo 'Alguem tirou nota 10?'.PHP_EOL;
// a função in_array() também verifica se o valor 10 existe no array $notas,
// mas desta vez a comparação é feita de forma estrita. Isso significa que a função só retornará
// true se o array $notas contiver o valor 10 do tipo integer.
var_dump(in_array(10, $notas, true));


echo 'Quem tirou nota 10?'.PHP_EOL;
// A função array_search() busca por um valor no array $notas e retorna a chave correspondente se encontrada.
// Aqui, ela está procurando pelo valor 10 e retornará a chave associada a esse valor.
echo array_search(10, $notas);
?>
