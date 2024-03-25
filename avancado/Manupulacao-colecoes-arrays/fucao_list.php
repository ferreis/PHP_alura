<?php
// Aqui, um array associativo é definido com três valores.
$dados = ['Rafael', 10, 24];

// A função list é usada para atribuir valores de um array a variáveis.
// Neste caso, os valores do array $dados são atribuídos às variáveis $nome, $nota e $idade, respectivamente.
list($nome, $nota, $idade) = $dados;

var_dump($nome, $nota, $idade);

// Aqui, um novo array associativo é definido com chaves como strings.
$dadosIndiceString = [
    'nome' => 'Rafael',
    'nota' => 10,
    'idade' => 24
];

// A função list é usada novamente, mas desta vez com chaves de string para atribuir valores do array $dadosIndiceString às variáveis correspondentes.
list('nome' => $nome, 'nota' => $nota,'idade' => $idade) = $dadosIndiceString;

var_dump($nome, $nota, $idade);
?>
