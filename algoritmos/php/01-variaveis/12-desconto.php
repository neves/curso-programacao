<?

// ENTRADA

$preco = $argv[1];
$porcento = $argv[2];

$porcento = min($porcento, 100);

// LOGICA

$desconto = $preco * $porcento / 100;
$preco_final = $preco - $desconto;

// SAIDA

$saida = "
Preco: R$ %01.2f
Desconto: %d%% (R$ -%01.2f)
Preco Final: R$ %01.2f

";

// para formatação utilizar vírgula ao invés de ponto para separador de casas decimais
// "portuguese-brazil" ou "ptb" 
setlocale(LC_NUMERIC, "ptb");

printf($saida, $preco, $porcento, $desconto, $preco_final);

?>