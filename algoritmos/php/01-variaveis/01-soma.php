<?

/**
=begin
titulo: soma de dois números
enunciado: Criar um programa que receba dois números e exiba a sua soma
exemplos:
  10 20: 10 + 20 = 30
  2 998: 2 + 998 = 1000
dificuldade: 0
linguagem: php
categorias: [aritmetica]
=end
*/

// ENTRADA

$n1 = $argv[1];
$n2 = $argv[2];

// LOGICA

$soma = $n1 + $n2;

// SAIDA

echo "
$n1 + $n2 = $soma

"

?>