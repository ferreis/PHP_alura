<?php
// Problema de precisão
$numero = 0.1;
$numero2 = 0.2;

// a soma dos numeros devem ser 0.3
var_dump($numero + $numero2); // float(0.30000000000000004)
echo '<br>';

// Solução do problema

var_dump($numero + $numero2);