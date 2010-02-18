<?

// ENTRADA

$min = $argv[1];
$max = $argv[2];

// LOGICA

$sorteio = mt_rand($min, $max);

// SAIDA

echo "
sorteado o numero $sorteio entre $min e $max.

";

?>