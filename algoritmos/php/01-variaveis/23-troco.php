<?
/**
=begin
titulo: Troco
enunciado: Dado um valor de reais inteiro
exemplos:
  188: |
    1 x R$ 100,00
    1 x R$ 50,00
    1 x R$ 20,00
    1 x R$ 10,00
    1 x R$ 5,00
    1 x R$ 2,00
    1 x R$ 1,00
  3: |
    0 x R$ 100,00
    0 x R$ 50,00
    0 x R$ 20,00
    0 x R$ 10,00
    0 x R$ 5,00
    1 x R$ 2,00
    1 x R$ 1,00
  19: |
    0 x R$ 100,00
    0 x R$ 50,00
    0 x R$ 20,00
    1 x R$ 10,00
    1 x R$ 5,00
    2 x R$ 2,00
    0 x R$ 1,00
dificuldade: 3
linguagem: php
solucao: Dividir exato por 100 e com o resto, fazer o mesmo para os próximos, de forma decrescente
categorias: [aritmetica]
=end
*/

// ENTRADA
$valor = $argv[1];

// LOGICA

$n100 = floor($valor / 100);
$valor = $valor % 100;

$n50 = floor($valor / 50);
$valor = $valor % 50;

$n20 = floor($valor / 20);
$valor = $valor % 20;

$n10 = floor($valor / 10);
$valor = $valor % 10;

$n5 = floor($valor / 5);
$valor = $valor % 5;

$n2 = floor($valor / 2);
$n1 = $valor % 2;

// SAIDA

echo "
$n100 x R$ 100,00
$n50 x R$ 50,00
$n20 x R$ 20,00
$n10 x R$ 10,00
$n5 x R$ 5,00
$n2 x R$ 2,00
$n1 x R$ 1,00
"
?>