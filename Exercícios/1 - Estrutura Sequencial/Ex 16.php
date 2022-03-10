<?php

$area = 100;

$litros = round($area / 3);

$latas = round($litros / 18);
if ($litros % 18 != 0) {
    $latas += 1;
}

echo "Latas de tintas necessárias: $latas";
