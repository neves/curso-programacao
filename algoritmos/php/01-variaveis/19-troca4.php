<?

// ENTRADA

$a = $argv[1];
$b = $argv[2];
$c = $argv[3];
$d = $argv[4];

// Trocar a e d
$temp = $a;
$a = $d;
$d = $temp;

// Trocar b e c
$temp = $c;
$c = $b;
$b = $temp;

// SAIDA

echo "
$a $b $c $d

"

?>