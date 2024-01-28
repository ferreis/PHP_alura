<?php
$listaIdade = [18, 23, 65, 77, 95, 31, 35, 15, 27, 26];

for ($i = 0; $i <= 9; $i++) {
    echo "$listaIdade[$i] ";
}
echo "<br><br>" . PHP_EOL;
echo count($listaIdade); // count(); pega o tamanho da lista, se a lista  crecer ele tambem aumenta;
echo "<br><br>" . PHP_EOL;

$listaIdade = [18, 23, 65, 77, 95, 31, 35, 15, 27, 26, 65, 87, 13];
for ($i = 0; $i < count($listaIdade); $i++) {
    echo "$listaIdade[$i] ";
}