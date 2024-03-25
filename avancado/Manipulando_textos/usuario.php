<?php
// Aqui, duas variáveis são definidas: $email e $senha.
$nome = 'Rafael Mecabô';
$email = 'Mecabô@email.com.br';
$senha = '123ã';

/* Forma correta de fazer isso */
// A função strlen é usada para obter o comprimento de uma string. Ela conta o número de bytes na string,
// o que pode não ser igual ao número de caracteres se a string contiver caracteres multibyte.
// Neste caso, ela é usada para verificar se o comprimento da senha é menor que 8.
if (strlen($senha) < 8) {
    echo 'Senha fraca' . PHP_EOL;
}

// A função mb_strlen é semelhante à função strlen, mas é multibyte safe, o que significa que ela conta o número de caracteres,
// não o número de bytes. Isso é útil quando se trabalha com strings que podem conter caracteres multibyte.
// Neste caso, ela é usada para verificar se o comprimento da senha é menor que 8.
if (mb_strlen($senha) < 8) {
    echo 'Senha fraca' . PHP_EOL;
}

// A função strpos é usada para encontrar a posição da primeira ocorrência de uma substring em uma string.
// Neste caso, ela é usada para encontrar a posição do caractere '@' no email.
$posicaoDoArroba = strpos($email, '@');

// A função substr é usada para extrair uma parte de uma string.
// Neste caso, ela é usada para extrair a parte do email antes do '@'.
// As funções strtoupper e strtolower são usadas para converter a string para maiúsculas e minúsculas, respectivamente.
$usuarioOriginal = substr($email, 0, $posicaoDoArroba);
$usuarioMaiuscula = strtoupper(substr($email, 0, $posicaoDoArroba));
$usuarioMinuscula = strtolower(substr($email, 0, $posicaoDoArroba));

// Aqui, as strings são impressas.
echo "Original: $usuarioOriginal, Maiúsculas: $usuarioMaiuscula, Minúsculas: $usuarioMinuscula" . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

// As funções mb_strtoupper e mb_strtolower são semelhantes às funções strtoupper e strtolower, mas são multibyte safe,
// o que significa que elas funcionam corretamente com strings que contêm caracteres multibyte.
$usuarioMaiuscula = mb_strtoupper(substr($email, 0, $posicaoDoArroba));
$usuarioMinuscula = mb_strtolower(substr($email, 0, $posicaoDoArroba));
echo "Original: $usuarioOriginal, Maiúsculas: $usuarioMaiuscula, Minúsculas: $usuarioMinuscula" . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

// A função explode é usada para dividir uma string em um array, com base em um delimitador especificado.
// Neste caso, ela está dividindo a string $nome em um array, usando um espaço em branco como delimitador.
// O resultado é um array onde o primeiro elemento é a primeira palavra de $nome (antes do espaço) e o segundo elemento é o restante de $nome (após o espaço).
// ### O terceiro parâmetro opcional, limit, pode ser usado para especificar o número máximo de elementos no array resultante.
// Se limit for definido, o array retornado conterá um máximo de elementos limit, com o último elemento contendo o resto da string.
list($nome, $subrenome) = explode(' ', $nome);

echo "Nome: $nome " . PHP_EOL;
echo "Subrenome: $subrenome " . PHP_EOL;


?>
