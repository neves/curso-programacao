<?
// ENTRADA
$n1 = $argv[1];
$n2 = $argv[2];

// LOGICA
if ($n1 > $n2):
	$maior = $n1;
	$menor = $n2;
else:
	$maior = $n2;
	$menor = $n1;
endif;

// SAIDA
echo "$maior > $menor"
?>