<?php

// A variável $anoNascimento é definida como uma string contendo apenas números.
$anoNascimento  = '1997';
// A função getdate() é chamada, que retorna um array associativo contendo informações da data atual.
$anoAtual = getdate();
// A idade é calculada subtraindo o ano de nascimento do elemento "year" do array $anoAtual.
// Como $anoNascimento é uma string numérica, o PHP faz a conversão automática para inteiro.
$idade = $anoAtual["year"] - $anoNascimento;

// A idade é impressa seguida de uma quebra de linha (PHP_EOL).
echo $idade .PHP_EOL;

// Aqui, a variável $anoNascimento é definida com caracteres não numéricos.
$anoNascimento  = 'ano 1997'; // Erro: PHP não converte strings com caracteres não numéricos para inteiros.
// A operação de subtração resultará em um valor inesperado ou erro, pois $anoNascimento não é puramente numérico.
$idade = $anoAtual["year"] - $anoNascimento;

// A tentativa de imprimir $idade resultará em um erro ou valor inesperado.
echo $idade .PHP_EOL;




?>
