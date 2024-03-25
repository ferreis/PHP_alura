<?php
// Aqui, uma variável $csv é definida com o valor '..,Rafael Mecabô,27,Teste,(99)99999-9999,)).'.

$csv = '..,Rafael Mecabô,27,Teste,(99)99999-9999,)).';

// A função trim é usada para remover caracteres do início e do fim de uma string.
// Neste caso, ela está removendo os caracteres ',.-()' do início e do fim da string $csv.
echo trim($csv, ',.-()') . PHP_EOL;

// A função ltrim é semelhante à função trim, mas ela só remove caracteres do início da string.
// Neste caso, ela está removendo os caracteres ',.-()' do início da string $csv.
echo ltrim($csv, ',.-()') . PHP_EOL;

// A função rtrim é semelhante à função trim, mas ela só remove caracteres do fim da string.
// Neste caso, ela está removendo os caracteres ',.-()' do fim da string $csv.
echo rtrim($csv, ',.-()') . PHP_EOL;
?>
