<?php
$contador = 0;
$multiplicador = 2;
$pontecial = 2;

//usado quando não se sabe o limite;
while ($contador <= 10){
    $resultado = $contador * $multiplicador;
    echo " Multiplicação: $multiplicador x $contador = $resultado <br>".PHP_EOL;
    $contador++;
}
//Utilizado quando se conhece o limite
//possivel usar contator = contator + 1 ou contator +=1
for ($contadorFor = 0; $contadorFor <= 10; $contadorFor++){
    $resultado = $contadorFor ** $pontecial;
    echo " Potentical: $pontecial ^ $contadorFor = $resultado <br>".PHP_EOL;

}

for ($contadorFor = 0; $contadorFor <= 15; $contadorFor++){
    if ($contadorFor > 5 and $contadorFor < 10){
        continue;// ir para proxima interação
    }
    if ($contadorFor == 13){
        break; // para o codigo for fazendo sair do container de codigo, normalmente usar o codigo dessa formar
        // seria errado, pois estarei informando que a codição de termino pre-definida está feito errado
    }
    echo "$contadorFor, ";

}

