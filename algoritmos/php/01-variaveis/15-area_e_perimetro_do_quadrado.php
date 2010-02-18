<?

// ENTRADA

$lado = $argv[1];

// LOGICA

$area = $lado * $lado;
$perimetro = 4 * $lado;

// SAIDA

echo "
O quadrado de lado {$lado}cm,
possui area de {$area}cm2 quadrados e
perimetro de {$perimetro}cm.

";

?>