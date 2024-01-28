<?php
$peso = 112;
$altura = 187;

$imc = $peso/(($altura**2)/10000);
echo "Seu IMC: $imc <br>";
$altura = 1.87;
$imc = $peso/($altura**2);
echo "Seu IMC: $imc <br>";