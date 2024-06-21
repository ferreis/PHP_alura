<?php
$nome = 'Campo';
?>

<!-- A função addslashes() adiciona barras invertidas antes de caracteres que precisam ser escapados em consultas SQL,
 como aspas simples ('), aspas duplas ("), barra invertida (\) e NUL (o byte NULL). -->
<input type="text"  name="<?php echo addslashes($nome); ?>" />

<!-- A função htmlentities() converte todos os caracteres aplicáveis em entidades HTML.
Isso é útil para prevenir ataques de Cross-Site Scripting (XSS) ao garantir que o código HTML inserido seja tratado como texto,
em vez de ser interpretado e executado como HTML/JavaScript. -->
<input type="text"  name="<?php echo htmlentities($nome); ?>" />
