<?php
// Definindo um array associativo que representa os alunos de 2023.
$alunos2023 = [
    0 => 'Vinicius',
    1 => 'joao',
    2 => 'Ana',
    3 => 'Roberto',
    4 => 'Maria',
    5 => 'Luca',
];

// Definindo um array associativo que representa os novos alunos que se juntaram em 2024.
$novosAlunos = [
    6 => 'Patricia',
    7 => 'Nicolas',
    8 => 'Rafael',
    9 => 'Kilderson',
];

// A função array_merge mescla os elementos de uma ou mais arrays para que os valores de um são anexados ao final do anterior.
// Ela retorna o resultado array.
// Os valores nas array de entrada com chaves numéricas serão renumerados com incrementando chaves a
// partir de zero na matriz de resultados.
$alunos2024a = array_merge($alunos2023, $novosAlunos);
var_dump($alunos2024a); // Exibe o array $alunos2024a

// Além do array_merge, é possível unir os arrays através do operador mais (+).
// No entanto, ao contrário do array_merge, o operador + preserva as chaves numéricas originais.
// Se houver chaves duplicadas, o operador + irá considerar o valor da primeira ocorrência da chave e ignorará a segunda.
$alunos2024b = $alunos2023+$novosAlunos;
var_dump($alunos2024b); // Exibe o array $alunos2024b

//Tambem é possivel desempacotar os arrays usando operadidor unpacking (...)
// esse mesmo operado pode ser usando de outras forma como spread operator
$alunos2024c = [...$alunos2023,'Carlos',...$novosAlunos];
var_dump($alunos2024c); // Exibe o array $alunos2024b


//spread operator
exemplo([],[],[],[]); //
exemplo2(1,2,34); //
exemplo3(...[1,2,3]);
function exemplo(array ...$alunos) // todos os parametros tem que ser arrays
{

}
function exemplo2(int ...$alunos) // todos os parametros tem que ser inteiros
{

}
function exemplo3(int $a, int $b, int $c) // todos os parametros tem que ser inteiros
{

}
?>
