<?php

$peso_do_peixe = 55;
$excesso = 0;
if ($peso_do_peixe > 50) {
    $excesso = $peso_do_peixe - 50;
}
$multa = $excesso * 4;

echo "Peso do peixe: $peso_do_peixe\n";
echo "Excesso: $excesso\n";
echo "Multa: R$$multa";
