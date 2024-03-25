<?php
$textoTeste = 'ÁguA FrEsca No VeRão é DeLiCiOsA!';

// A função mb_convert_case é usada para converter uma string para um determinado tipo de capitalização.
// Ela aceita um dos seguintes modos como segundo argumento:
// MB_CASE_UPPER: Converte a string para maiúsculas.
// MB_CASE_LOWER: Converte a string para minúsculas.
// MB_CASE_TITLE: Converte a string para o formato de título (cada palavra começa com uma letra maiúscula).
// MB_CASE_FOLD: É usado para implementar a correspondência de caso insensível. Converte a string para minúsculas.
// MB_CASE_UPPER_SIMPLE: Converte a string para maiúsculas sem considerar caracteres multibyte.
// MB_CASE_LOWER_SIMPLE: Converte a string para minúsculas sem considerar caracteres multibyte.
// MB_CASE_TITLE_SIMPLE: Converte a string para o formato de título sem considerar caracteres multibyte.
// MB_CASE_FOLD_SIMPLE: Converte a string para minúsculas sem considerar caracteres multibyte.
echo "MB_CASE_UPPER: " . mb_convert_case($textoTeste, MB_CASE_UPPER) . PHP_EOL;
echo "MB_CASE_LOWER: " . mb_convert_case($textoTeste, MB_CASE_LOWER) . PHP_EOL;
echo "MB_CASE_TITLE: " . mb_convert_case($textoTeste, MB_CASE_TITLE) . PHP_EOL;
echo "MB_CASE_FOLD: " . mb_convert_case($textoTeste, MB_CASE_FOLD) . PHP_EOL;
echo "MB_CASE_UPPER_SIMPLE: " . mb_convert_case($textoTeste, MB_CASE_UPPER_SIMPLE) . PHP_EOL;
echo "MB_CASE_LOWER_SIMPLE: " . mb_convert_case($textoTeste, MB_CASE_LOWER_SIMPLE) . PHP_EOL;
echo "MB_CASE_TITLE_SIMPLE: " . mb_convert_case($textoTeste, MB_CASE_TITLE_SIMPLE) . PHP_EOL;
echo "MB_CASE_FOLD_SIMPLE: " . mb_convert_case($textoTeste, MB_CASE_FOLD_SIMPLE) . PHP_EOL;