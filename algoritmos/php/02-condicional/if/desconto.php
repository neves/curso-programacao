<?

define("VALOR_MINIMO_PARA_RECEBER_DESCONTO", 200);

$preco = 200;
$desconto = 10;

$recebeu_desconto = false;
$total = $preco;
if ($preco >= VALOR_MINIMO_PARA_RECEBER_DESCONTO):
	$total -= $desconto;
	$recebeu_desconto = true;
endif;

?>
Valor da Compra: R$ <?=$preco?> 
<? if ($recebeu_desconto): ?>
Desconto:        R$ <?=$desconto?>
<? endif ?> 
==========================================
Total da Compra: R$ <?=$total?>
