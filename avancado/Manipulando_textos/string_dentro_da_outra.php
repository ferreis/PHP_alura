<?php
// Aqui, uma variável $nome é definida com o valor 'Rafael Fernando dos Reis Mecabo'.
$nome = 'Rafael Fernando dos Reis Mecabô';

// A função str_contains é usada para verificar se uma string contém outra string.
// Neste caso, ela está verificando se a string $nome contém a string 'Mecabô'.
// A função retorna true se a string 'Mecabô' for encontrada em $nome, e false caso contrário.
// O resultado é armazenado na variável $familia.
$familia = str_contains($nome, 'Mecabô');
if ($familia) {
    echo "$nome é da familia" . PHP_EOL;
} else {
    echo "$nome não é da familia" . PHP_EOL;
}
?>
