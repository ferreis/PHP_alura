<?php
// include 'funcoes.php';  // Inclui o arquivo opcionalmente (não gera erro se o arquivo não for encontrado)
// require 'funcoes.php'; // Inclui o arquivo obrigatoriamente (gera um erro fatal se o arquivo não for encontrado)
require_once 'funcoes.php'; // Inclui o arquivo apenas se ainda não foi incluído anteriormente neste script

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
    ],

    '123.256.789-13' => [
        'titular' => 'Del etar',
        'saldo' => 0
    ]
];
$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], -150);
$contasCorrentes['123.256.789-12'] = depositar($contasCorrentes['123.256.789-12'], -150);
titularComLetrasMaiusculas($contasCorrentes['123.456.789-11']);


foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    //ou da formar = list('titular' => $titular, 'saldo'  => $saldo) = $conta;
    exibeMensagem(
        "$cpf $titular $saldo"


    );
}
exibeMensagem("<br>");
$contasCorrentes['123.256.789-12'] = depositar($contasCorrentes['123.256.789-12'], 1050);
unset($contasCorrentes['123.256.789-13']);
echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta) {
    exibeConta($conta);
}
echo "</ul>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Contas correntes</h1>

<dl><?php foreach ($contasCorrentes as $cpf => $conta) { ?>
    <dt><h3><?= $conta['titular'];?> - <?=$cpf;?></h3></dt>
    <dd> Saldo:<?= $conta['saldo']; ?></dd>
<?php } ?>
</dl>
</body>
</html>
