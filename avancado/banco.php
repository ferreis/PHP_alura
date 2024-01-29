<?php
function sacar(array $conta, float $valorSacar):array
{
    if ($valorSacar < 0) {
        $valorSacar *= -1;
    }

    if ($conta['saldo'] < $valorSacar) {
        exibeMensagem("Valor do Saque invalido");
    } else {
        $conta['saldo'] -= $valorSacar;
    }
    return $conta;
}

function depositar(array $conta,float $valorDepositado):array
{
    if ($valorDepositado < 0) {
        exibeMensagem("O valor informado é negativo; foi ajustado para positivo.");
        $valorDepositado *= -1;
    }
    $conta['saldo'] += $valorDepositado;

    return $conta;
}

function exibeMensagem($mensagem)
{
    echo $mensagem . " <br>" . PHP_EOL;

}


$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];
$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], -150);
$contasCorrentes['123.256.789-12'] = depositar($contasCorrentes['123.256.789-12'], -150);


foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        "$cpf $conta[titular] $conta[saldo]"
    );
}

// ou

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}"
    );
}