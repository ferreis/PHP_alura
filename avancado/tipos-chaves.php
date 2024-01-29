<?php
$array = [
    1 => 'a',      // Chave 1 (Número Inteiro): O PHP converte chaves numéricas para inteiros, aqui representando a posição 1 no array.
    '1' => 'b',    // Chave '1' (String): Chave string é convertida para int 1 guardando a  informação no indice 1.
    1.5 => 'C',    // Chave 1.5 (Número de Ponto Flutuante): O PHP tenta converter para int, mas como é ponto flutuante, pode ocorrer perda de precisão.
    true => 'D'    // Chave true (Valor Booleano): O PHP interpreta true como 1, convertendo para um índice inteiro, representando a posição 1 no array.
];
/*
 * https://www.php.net/manual/pt_BR/language.types.array.php
 * Strings contendo quaisquer ints válidos, que não sejam precedidos do sinal de +, serão convertidos para o tipo int. Por exemplo, a chave"8" será, na verdade, armazenada como 8. Entretanto, "08" não será convertido, por não ser um inteiro decimal válido.
 * floats também são convertidos para ints, isso significa que a parte fracionária será removida. Por exemplo, a chave 8.7 será na verdade armazenada como 8.
 * bools são convertidos para ints, igualmente, por exemplo, a chave true, será na verdade armazenada como 1 e a chave false como 0.
 * null será convertido para uma string vazia, por exemplo, a chave null na verdade será armazenada como "".
 * arrays e objects não podem ser usados como chaves. Fazer isso resultará em um aviso: Illegal offset type.
 */
foreach ($array as $item) {
    echo $item . PHP_EOL;
}
echo "<br>". PHP_EOL;

echo $array[1] . PHP_EOL;    // Mostra 'a'
echo $array['1'] . PHP_EOL;  // Mostra 'b'
echo $array[1.5] . PHP_EOL;  // Mostra 'C'
echo $array[true] . PHP_EOL; // Mostra 'D'

echo "<br>";
var_dump($array);