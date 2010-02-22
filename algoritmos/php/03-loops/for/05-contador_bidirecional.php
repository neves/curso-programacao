<?
/**
=begin
titulo: Contador do Primeiro ao Segundo
enunciado: Fazer um contador que conta do primeiro número até o segundo
exemplos:
    1 10: 1 2 3 4 5 6 7 8 9 10
    10 1: 10 9 8 7 6 5 4 3 2 1
dificuldade: 2
linguagem: php
solucao: Fazer um if ao redor do for para decidir qual for utilizar, pra cima ou pra baixo.
categorias: [for, if]
=end
*/

// ENTRADA

$inicio = $argv[1];
$fim = $argv[2];

// SAIDA

if ($fim < $inicio)
  for ($i = $inicio; $i >= $fim; $i--)
    echo "$i ";
else
  for ($i = $inicio; $i <= $fim; $i++)
    echo "$i ";

?>