<?
/**
=begin
titulo: Tabuada
enunciado: Recebe um número e exibe sua tabuada
exemplos:
  8: |
    -------------
    TABUADA DO 8
    =============
    8 x 1 = 8
    8 x 2 = 16
    8 x 3 = 24
    8 x 4 = 32
    8 x 5 = 40
    8 x 6 = 48
    8 x 7 = 56
    8 x 8 = 64
    8 x 9 = 72
    8 x 10 = 80
    _____________

  666: |
    -------------
    TABUADA DO 666
    =============
    666 x 1 = 666
    666 x 2 = 1332
    666 x 3 = 1998
    666 x 4 = 2664
    666 x 5 = 3330
    666 x 6 = 3996
    666 x 7 = 4662
    666 x 8 = 5328
    666 x 9 = 5994
    666 x 10 = 6660
    _____________

dificuldade: 1
linguagem: php
solucao: criar uma variável para cada número
categorias: [saida]
=end
*/

// ENTRADA

$n = $argv[1];

// LOGICA

$n1 = $n * 1;
$n2 = $n * 2;
$n3 = $n * 3;
$n4 = $n * 4;
$n5 = $n * 5;
$n6 = $n * 6;
$n7 = $n * 7;
$n8 = $n * 8;
$n9 = $n * 9;
$n10 = $n * 10;

// SAIDA

echo "
-------------
TABUADA DO $n
=============
$n x 1 = $n1
$n x 2 = $n2
$n x 3 = $n3
$n x 4 = $n4
$n x 5 = $n5
$n x 6 = $n6
$n x 7 = $n7
$n x 8 = $n8
$n x 9 = $n9
$n x 10 = $n10
_____________

"

?>