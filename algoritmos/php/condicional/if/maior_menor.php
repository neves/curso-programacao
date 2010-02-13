<?
/**
=begin
titulo: maior e menor de dois
enunciado: Criar um programa que receba dois números distintos e exiba qual o maior e o menor
exemplos:
    23 34: 34 > 23
    34 23: 34 > 23
dificuldade: 2
linguagem: php
solucao: utilizando if e else
categorias: [logica, if, else]
ordem: 2
=end
*/

// ENTRADA
$n1 = $argv[1];
$n2 = $argv[2];

// LOGICA
if ($n1 > $n2):
    $maior = $n1;
    $menor = $n2;
else:
    $maior = $n2;
    $menor = $n1;
endif;

// SAIDA
echo "$maior > $menor"
?>