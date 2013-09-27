<?php

function decimal_romanos($numero)
{
    $romanos = [
        ['I', 'V', 'X'],
        ['X', 'L', 'C'],
        ['C', 'D', 'M'],
        ['M', 'Y', 'W']
    ];

    $digitos = str_split($numero, 1);
    $digitos = array_reverse($digitos);
    $romano = '';

    foreach ($digitos as $k => $digito) {
        $digito_romano = '';
        list($um, $cinco, $dez) = $romanos[$k];

        switch($digito) {
            case 1:
            case 2:
            case 3:
                $digito_romano = str_repeat($um, $digito);
                break;
            case 4:
                $digito_romano = $um;
            case 5:
            case 6:
            case 7:
            case 8:
                $digito_romano .= $cinco . str_repeat($um, max($digito - 5, 0));
                break;
            case 9:
                $digito_romano = $um.$dez;
        }

        $romano = $digito_romano.$romano;
    }

    return $romano;
}
