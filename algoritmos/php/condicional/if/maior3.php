<?
/**
=begin
titulo: maior de três
enunciado: Criar um programa que receba três números distintos e exiba qual o maior
exemplos:
  1 2 3: o maior entre 1, 2 e 3 eh o 3
  1 3 2: o maior entre 1, 3 e 2 eh o 3
  2 1 3: o maior entre 2, 1 e 3 eh o 3
  2 3 1: o maior entre 2, 3 e 1 eh o 3
  3 1 2: o maior entre 3, 1 e 2 eh o 3
  3 2 1: o maior entre 3, 2 e 1 eh o 3
dificuldade: 3
linguagem: php
solucao: descobre o maior entre o primeiro e segundo e o compara com o terceiro para descobrir o maior
categorias: [logica, if, ternario]
=end
*/
// ENTRADA
$n1 = $argv[1];
$n2 = $argv[2];
$n3 = $argv[3];

// LÓGICA
$maior = $n1 > $n2 ? $n1 : $n2;
if ($n3 > $maior) $maior = $n3;

// SAÍDA
echo "o maior entre $n1, $n2 e $n3 eh o $maior";

?>