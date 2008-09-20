<?
/**
=begin
titulo: menor de dois
enunciado: Criar um programa que receba dois números distintos e exiba qual o menor
exemplos:
  23 34: o menor entre 23 e 34 é o 23
  34 23: o menor entre 34 e 23 é o 23
dificuldade: 1
linguagem: ruby
solucao: utilizando operador ternario
categorias: [logica, ternario]
=end
*/

// ENTRADA
$n1 = $argv[1];
$n2 = $argv[2];

// LOGICA
$menor = $n1 < $n2 ? $n1 : $n2;

// SAIDA
echo "o menor entre $n1 e $n2 eh o $menor"
?>