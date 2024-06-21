<?php

// Definindo um array com números de telefone para validação
$telefones = [
    '(24) 9 9999-9999',
    '(99) 9 9999-0000',
    '(24) 9 1111-0000',
    '(22) 2222-2222'
];
// Percorrendo cada número de telefone no array
foreach ($telefones as $telefone) {
    $regex = '/^\(([0-9]{2})\) (9? [0-9]{4}-[0-9]{4})$/';
    // Explicação detalhada da expressão regular:

    // ^: Indica o início da string
    // \(: Caractere literal de parêntese aberto
    // [0-9]{2}: Grupo com 2 dígitos entre 0 e 9 (código de área)
    // \): Caractere literal de parêntese fechado
    // 9?: Quantificador opcional para o dígito 9 (pode haver ou não)
    //  : Espaço em branco literal
    // [0-9]{4}: Grupo com 4 dígitos entre 0 e 9 (primeira parte do número)
    // -: Hífen literal
    // [0-9]{4}: Grupo com 4 dígitos entre 0 e 9 (segunda parte do número)
    // $: Indica o final da string

    // A expressão regular completa verifica se o número de telefone segue o formato:
    // (código de área) 9? (espaço) NNNNN-NNNN

    // Utilizando a função `preg_match` para validar o formato do número
    $telefoneValido = preg_match($regex, $telefone, $correspondencia);

    // Mostrando os resultados da validação
    var_dump($correspondencia);
    echo "</br>";

    // Verificando se o número é válido e imprimindo a mensagem correspondente
    if ($telefoneValido) {
        echo "$telefone Telefone válido</br>";
    } else {
        echo "$telefone Telefone inválido</br>";
    }
    // Utilizando preg_replace para substituir o número válido por "(XX) NNNN-NNNN"
    echo preg_replace($regex,
        '(XX) \2',
        $telefone
    );
    echo "</br></br>";

}


