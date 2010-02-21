<?
/**
=begin
titulo: Desconto percentual
enunciado: Receba de entrada um preзo e uma porcentagem e exiba o preзo com a porcentagem em desconto.
exemplos:

  100 10: |
    Preco: R$ 100,00
    Desconto: 10% (R$ -10,00)
    Preco Final: R$ 90,00

  259 20: |
    Preco: R$ 259,00
    Desconto: 20% (R$ -51,80)
    Preco Final: R$ 207,20

dificuldade: 2
linguagem: php
solucao: "Utilizar a funзгo print_f para formatar a saida e
  setlocale(LC_NUMERIC, 'ptb'); para trocar o separador decimal de ponto para vнrgula."
categorias: [api, aritmetica, saida]
=end
*/

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

// para formataзгo utilizar vнrgula ao invйs de ponto para separador de casas decimais
// "portuguese-brazil" ou "ptb" 
setlocale(LC_NUMERIC, "ptb");

printf($saida, $preco, $porcento, $desconto, $preco_final);

?>