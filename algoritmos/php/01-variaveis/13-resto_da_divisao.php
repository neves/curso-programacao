<?

// ENTRADA

$n1 = $argv[1];
$n2 = $argv[2];

// LOGICA

$divisao = floor($n1 / $n2);
$resto = $n1 % $n2;

// SAIDA

echo "
$n1 dividido por $n2 = $divisao com resto $resto
$n2 x $divisao + $resto = $n1

"

?>