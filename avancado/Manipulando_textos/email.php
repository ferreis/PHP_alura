<?php

$nome = 'Fernando';
$motivo = 'discutir os detalhes emocionantes de nosso próximo projeto colaborativo';
$assinatura = 'Rafael F. dos R. Mecabô';

function geraEmail(string $nome, string $motivo, string $assinatura): void
{
    // Heredoc: Inicia com <<< seguido de um identificador, neste caso, "FINAL".
    $conteudoEmail = <<<FINAL
    
        Olá, $nome!
        Estamos entrando em contato para $motivo 
        $assinatura
    
    FINAL;
    // O identificador de fechamento "FINAL;" deve estar sozinho em uma linha, sem espaços antes.

    echo $conteudoEmail;

    // O identificador de fechamento alinhado à esquerda significa que a string não terá espaços antes das linhas.
    $conteudoEmail = <<<FINAL
    
    Olá, $nome!
    Estamos entrando em contato para $motivo 
    $assinatura
    
    FINAL;
    echo $conteudoEmail;

    // Nowdoc: Similar ao heredoc, mas usa aspas simples, impedindo a interpretação de variáveis.
    $conteudoEmail = <<<'FINAL'
    
        Olá, $nome!
        Estamos entrando em contato para $motivo 
        $assinatura
    
    FINAL;
    echo $conteudoEmail;
}

geraEmail($nome, $motivo, $assinatura);

?>
