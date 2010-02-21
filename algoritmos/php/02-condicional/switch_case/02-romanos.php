<?
/**
=begin
titulo: Romanos
enunciado: Dado um número entre 1 e 10, exibir sua versão em romanos.
exemplos:
  1: I
  2: II
  3: III
  4: IV
  5: V
  6: VI
  7: VII
  8: VIII
  9: IX
  10: X
dificuldade: 1
linguagem: php
solucao: Utilizar o switch para decidir qual romano retornar
categorias: [logica]
=end
*/
// ENTRADA

$n = $argv[1];

// LOGICA

switch($n):
  case 1: $r = "I"; break;
  case 2: $r = "II"; break;
  case 3: $r = "III"; break;
  case 4: $r = "IV"; break;
  case 5: $r = "V"; break;
  case 6: $r = "VI"; break;
  case 7: $r = "VII"; break;
  case 8: $r = "VIII"; break;
  case 9: $r = "IX"; break;
  case 10: $r = "X"; break;
endswitch;

// SAIDA

echo $r

?>