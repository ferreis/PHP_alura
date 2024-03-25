<?php
// Aqui, um array associativo é definido com três valores.
$dados = [
    'nome' => 'Rafael',
    'nota' => 10,
    'idade' => 24
];

// A função extract é usada para importar variáveis a partir de um array associativo.
// Ela verifica cada chave no array para ver se é válido como um nome de variável (por exemplo, não é um número),
// e então cria uma variável com esse nome e atribui a ela o valor associado no array.
// Neste caso, as variáveis $nome, $nota e $idade são criadas e recebem os valores 'Rafael', 10 e 24, respectivamente.
extract($dados);
var_dump($nome, $nota, $idade);

// A função compact faz o oposto de extract: ela cria um array a partir de variáveis.
// Você passa os nomes das variáveis como strings para a função compact, e ela retorna um array associativo,
// onde as chaves são os nomes das variáveis e os valores são os valores das variáveis.
// Neste caso, um novo array é criado com as chaves 'nome', 'nota' e 'idade' e os valores 'Rafael', 10 e 24, respectivamente.
$arrayCompact = compact('nome', 'nota', 'idade');
var_dump($arrayCompact);
?>
