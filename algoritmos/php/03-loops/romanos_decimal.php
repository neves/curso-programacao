<?php

function romanos_decimal($romano)
{
    $romanos = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
        'Y' => 5000,
        'W' => 10000
    ];
    $caracteres = str_split($romano, 1);
    $caracteres = array_reverse($caracteres);

    $decimalAnterior = 0;
    $numero = 0;
    foreach ($caracteres as $caracter) {
        $decimal = $romanos[$caracter];
        $numero += $decimal < $decimalAnterior ? -$decimal : $decimal;
        $decimalAnterior = $decimal;
    }

    return $numero;
}
