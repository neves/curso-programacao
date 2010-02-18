<?

// ENTRADA

$a = $argv[1];
$b = $argv[2];

// LOGICA

// utilizar uma variável temporária para fazer a troca
$temp = $a;
$a = $b;
$b = $temp;

// SAIDA

echo "
$a $b

"

?>