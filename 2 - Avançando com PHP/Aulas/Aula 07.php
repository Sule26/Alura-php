<?php

$array = [
    1 => 'a',
    '1' => 'b', // converte para inteiro
    1.5 => 'c', // converte para inteiro
    true => 'd' // converte para inteiro
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}
