<?php
// Array numérico desordenado
$numeros = [4, 2, 8, 1, 6];

// Exemplo de sort() - Ordenação crescente
sort($numeros);
echo "Sort (Crescente): ";
print_r($numeros);
echo "<br>";

// Exemplo de rsort() - Ordenação decrescente
rsort($numeros);
echo "Rsort (Decrescente): ";
print_r($numeros);
echo "<br>";

// Array associativo desordenado
$idades = [
    'João' => 25,
    'Maria' => 30,
    'Pedro' => 20
];

// Exemplo de ksort() - Ordenação crescente pelas chaves
ksort($idades);
echo "Ksort (Crescente pelas chaves): ";
print_r($idades);
echo "<br>";

// Exemplo de krsort() - Ordenação decrescente pelas chaves
krsort($idades);
echo "Krsort (Decrescente pelas chaves): ";
print_r($idades);
echo "<br>";

// Exemplo de asort() - Ordenação crescente pelos valores mantendo as chaves
asort($idades);
echo "Asort (Crescente pelos valores): ";
print_r($idades);
echo "<br>";

// Exemplo de arsort() - Ordenação decrescente pelos valores mantendo as chaves
arsort($idades);
echo "Arsort (Decrescente pelos valores): ";
print_r($idades);
echo "<br>";


// Explicação sobre as funções de ordenação:
/*
Funções sort() e rsort():
- sort() ordena um array em ordem crescente (do menor para o maior valor).
- rsort() ordena um array em ordem decrescente (do maior para o menor valor).
- Ambas as funções modificam o array original e não retornam um novo array.
- Os índices associativos são perdidos após a ordenação.

Funções ksort() e krsort():
- ksort() ordena um array associativo em ordem crescente pelas chaves.
- krsort() ordena um array associativo em ordem decrescente pelas chaves.
- Ambas as funções mantêm os valores associativos vinculados às suas respectivas chaves após a ordenação.

Funções asort() e arsort():
- asort() ordena um array associativo em ordem crescente pelos valores, mantendo a associação entre chaves e valores.
- arsort() ordena um array associativo em ordem decrescente pelos valores, mantendo a associação entre chaves e valores.
- Ambas as funções mantêm os índices associativos vinculados aos seus respectivos valores após a ordenação.
*/
?>
