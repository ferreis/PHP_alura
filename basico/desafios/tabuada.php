<?php
$multiplicador = 5;
$contador = 0;
while ($contador <= 10){
    $resultado = $contador * $multiplicador;
    echo " Multiplicação: $multiplicador x $contador = $resultado <br>".PHP_EOL;
    $contador++;
}