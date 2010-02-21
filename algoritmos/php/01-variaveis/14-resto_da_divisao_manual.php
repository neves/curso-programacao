<?
/**
=begin
titulo: Resto da Divisão
enunciado: Recebe 2 números e exibe a divisão inteira e o resto da divisão
exemplos:
  3 2: |
    3 dividido por 2 = 1 com resto 1
    2 x 1 + 1 = 3
  4 2: |
    4 dividido por 2 = 2 com resto 0
    2 x 2 + 0 = 4
  19 5: |
    19 dividido por 5 = 3 com resto 4
    5 x 3 + 4 = 19

dificuldade: 1
linguagem: php
solucao: "Subtrair a divisão redonda do total para saber o resto,
  e o operador % para saber o resto da divisão"
categorias: [api]
=end
*/
// ENTRADA

$n1 = $argv[1];
$n2 = $argv[2];

// LOGICA

$divisao = floor($n1 / $n2);
$resto = $n1 - $divisao * $n2;

// SAIDA

echo "
$n1 dividido por $n2 = $divisao com resto $resto
$n2 x $divisao + $resto = $n1

"

?>