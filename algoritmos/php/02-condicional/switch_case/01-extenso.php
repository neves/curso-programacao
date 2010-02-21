<?
/**
=begin
titulo: Números por Extenso
enunciado: Dado um número de 0 a 10, exibí-lo por extenso.
exemplos:
  1: um
  2: dois
  3: tres
  4: quatro
  5: cinco
  6: seis
  7: sete
  8: oito
  9: nove
  10: dez
dificuldade: 1
linguagem: php
solucao: Utilizar o switch
categorias: [logica]
=end
*/
// ENTRADA

$n = $argv[1];

// LOGICA

switch($n):
  case 1: $r = "um"; break;
  case 2: $r = "dois"; break;
  case 3: $r = "tres"; break;
  case 4: $r = "quatro"; break;
  case 5: $r = "cinco"; break;
  case 6: $r = "seis"; break;
  case 7: $r = "sete"; break;
  case 8: $r = "oito"; break;
  case 9: $r = "nove"; break;
  case 10: $r = "dez"; break;
endswitch;

// SAIDA

echo $r

?>