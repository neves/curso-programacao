<?

// ENTRADA

$n1 = $argv[1];
$n2 = $argv[2];

// LOGICA

$soma = $n1 + $n2;
$sub  = $n1 - $n2;
$mult = $n1 * $n2;
$div  = $n1 / $n2;

// SAIDA

echo "
$n1 + $n2 = $soma
$n1 - $n2 = $sub
$n1 x $n2 = $mult
$n1 / $n2 = $div

";

?>