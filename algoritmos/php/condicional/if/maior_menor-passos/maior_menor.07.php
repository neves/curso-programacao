<?
// ENTRADA
$n1 = 23;
$n2 = 34;

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