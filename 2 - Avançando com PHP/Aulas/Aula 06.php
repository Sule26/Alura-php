<?php

$idadeList = [23, 19, 25, 30, 41, 18, 21];

// $idadeList[7] = 20;
$idadeList[] = 20;

for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}
