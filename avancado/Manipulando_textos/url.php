<?php
// Aqui, uma variável $url é definida com o valor 'https://teste.com.br'.
$url = 'https://teste.com.br';

// A função str_starts_with é usada para verificar se uma string começa com outra string.
// Neste caso, ela está verificando se a string $url começa com a string 'https'.
// A função retorna true se a string 'https' for encontrada no início de $url, e false caso contrário.
if (str_starts_with($url, 'https')) {
    echo 'É uma URL segura';
} else {
    echo 'não é uma URL segura';
}
echo PHP_EOL;

// A função str_ends_with é usada para verificar se uma string termina com outra string.
// Neste caso, ela está verificando se a string $url termina com a string '.br'.
// A função retorna true se a string '.br' for encontrada no final de $url, e false caso contrário.
if (str_ends_with($url, '.br')) {
    echo 'É um dominio do Brasil';
} else {
    echo 'não é um dominio do Brasil';
}
echo PHP_EOL;
?>
