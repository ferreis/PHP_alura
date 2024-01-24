<?php
/*
Dúvida desta aula é a diferença entre as aspas, explicando também as tags, funções nas strings e `PHP_EOL`.

--------------------------------Aspas Simples (`' '):--------------------------------
O conteúdo dentro de aspas simples é tratado literalmente. Variáveis e sequências de escape
não são interpretadas dentro delas.
Exemplo: 'Olá mundo!'.

--------------------------------Aspas Duplas (`" "):--------------------------------
As aspas duplas permitem a interpretação de variáveis e caracteres de escape dentro da string.
Exemplo: "Eu tenho \"$idade\" anos".

--------------------------------PHP_EOL--------------------------------
PHP_EOL é uma constante pré-definida no PHP que representa o caractere de quebra de
linha compatível com o sistema operacional.
EOL significa "End of Line", que em português pode ser traduzido como "Fim de Linha".
*/
$idade = 16;

echo "Olá mundo!" . PHP_EOL;
echo "Eu tenho \"$idade\" anos". PHP_EOL;
echo 'Eu tenho \"$idade\" anos'. PHP_EOL;
echo "Eu tenho $idade anos". PHP_EOL;

echo PHP_EOL . PHP_EOL;

echo "Você só pode entrar, se tiver mais de 18 anos\n";

echo "Você tem $idade anos. Pode entrar". PHP_EOL;