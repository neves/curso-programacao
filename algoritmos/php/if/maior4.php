<?
/**
=begin
titulo: maior entre quatro números
enunciado: Criar um programa que receba quatro números distintos e exibe o maior
exemplos:
  1 2 3 4: o maior entre 1, 2, 3 e 4 eh o 4
  1 2 4 3: o maior entre 1, 2, 4 e 3 eh o 4
  1 3 2 4: o maior entre 1, 3, 2 e 4 eh o 4
  1 3 4 2: o maior entre 1, 3, 4 e 2 eh o 4
  1 4 2 3: o maior entre 1, 4, 2 e 3 eh o 4
  1 4 3 2: o maior entre 1, 4, 3 e 2 eh o 4

  2 1 3 4: o maior entre 2, 1, 3 e 4 eh o 4
  2 1 4 3: o maior entre 2, 1, 4 e 3 eh o 4
  2 3 1 4: o maior entre 2, 3, 1 e 4 eh o 4
  2 3 4 1: o maior entre 2, 3, 4 e 1 eh o 4
  2 4 1 3: o maior entre 2, 4, 1 e 3 eh o 4
  2 4 3 1: o maior entre 2, 4, 3 e 1 eh o 4

  3 1 2 4: o maior entre 3, 1, 2 e 4 eh o 4
  3 1 4 2: o maior entre 3, 1, 4 e 2 eh o 4
  3 2 1 4: o maior entre 3, 2, 1 e 4 eh o 4
  3 2 4 1: o maior entre 3, 2, 4 e 1 eh o 4
  3 4 1 2: o maior entre 3, 4, 1 e 2 eh o 4
  3 4 2 1: o maior entre 3, 4, 2 e 1 eh o 4

  4 1 2 3: o maior entre 4, 1, 2 e 3 eh o 4
  4 1 3 2: o maior entre 4, 1, 3 e 2 eh o 4
  4 2 1 3: o maior entre 4, 2, 1 e 3 eh o 4
  4 2 3 1: o maior entre 4, 2, 3 e 1 eh o 4
  4 3 1 2: o maior entre 4, 3, 1 e 2 eh o 4
  4 3 2 1: o maior entre 4, 3, 2 e 1 eh o 4
dificuldade: 3
linguagem: php
solucao: descobre o maior entre dois e repete o processo com os próximos.
categorias: [logica, if, ternario]
=end
*/
// ENTRADA
$n1 = $argv[1];
$n2 = $argv[2];
$n3 = $argv[3];
$n4 = $argv[4];

// LÓGICA
$maior = $n1 > $n2 ? $n1 : $n2;
if ($n3 > $maior) $maior = $n3;
if ($n4 > $maior) $maior = $n4;

// SAÍDA
echo "o maior entre $n1, $n2, $n3 e $n4 eh o $maior";

?>