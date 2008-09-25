<?
/**
=begin
titulo: maior de dois
enunciado: Criar um programa que receba dois números distintos e exiba qual o maior
exemplos:
  23 34: o maior entre 23 e 34 eh o 34
  34 23: o maior entre 34 e 23 eh o 34
dificuldade: 1
linguagem: php
solucao: utilizando operador ternario
categorias: [logica, ternario]
=end
*/

// ENTRADA
$n1 = $argv[1];
$n2 = $argv[2];

// LOGICA
$maior = $n1 > $n2 ? $n1 : $n2;

// SAIDA
echo "o maior entre $n1 e $n2 é o $maior"

?>