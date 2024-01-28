<?php
for ($contador = 0; $contador < 20; $contador++) {
    if ($contador % 2 == 1) {
        echo "o $contador é impar.";
    } else {
        echo "o $contador é par";
    }
    echo "<br>" . PHP_EOL;
}