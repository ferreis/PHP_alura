<?php
function exibeMensagem($mensagem)
{
    echo $mensagem . " <br>" . PHP_EOL;

}
function validarnegativo(float $valor): float
{
    if ($valor < 0) {
        exibeMensagem("O valor informado é negativo! ajustado para positivo.");
        $valor *= -1;
    }
    return $valor;
}

function sacar(array $conta, float $valorSacar): array
{
    $valorSacar = validarnegativo($valorSacar);

    if ($conta['saldo'] < $valorSacar) {
        exibeMensagem("Valor do Saque invalido");
    } else {
        $conta['saldo'] -= $valorSacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorDepositado): array
{
    $valorDepositado = validarnegativo($valorDepositado);

    $conta['saldo'] += $valorDepositado;

    return $conta;
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']); // configurar
    //        botão php.ini
}
function exibeConta(array $conta)
{
    $html = "<li>Titular: {$conta['titular']}. Saldo: {$conta['saldo']}</li>";
    echo $html;
}