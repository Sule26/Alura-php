<?php

$peso = 90.5;
$altura = 1.74;

$imc = $peso / ($altura ** 2);
echo "IMC = $imc" . PHP_EOL;

if ($imc < 18) {
    echo "abaixo";
} else if ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}
echo " do recomendado";
