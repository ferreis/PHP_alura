<?php
// Aqui, um array $telefones é definido com quatro números de telefone.
$telefones = [
    '(48) 99999-9999', '(38) 98999-9999',
    '(45) 99999-0000', '(47) 77777-7777',
];

// A função implode é usada para juntar elementos de um array em uma string.
// Ela aceita dois parâmetros: o primeiro é o delimitador que será usado para separar os elementos,
// e o segundo é o array cujos elementos serão juntados.
// Neste caso, ela está juntando os elementos do array $telefones em uma string, usando PHP_EOL (uma constante que representa uma quebra de linha) como delimitador.
echo implode(PHP_EOL, $telefones) .PHP_EOL;
?>
