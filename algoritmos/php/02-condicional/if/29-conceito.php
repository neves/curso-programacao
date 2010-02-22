<?
/**
=begin
titulo: Nota em Conceito
enunciado: "Converter uma nota de 0 a 10 em conceito de D a A onde:
  7.5 a 10 = A
  5.0 a 7.5 = B
  2.5 a 5.0 = C
  0 a 2.5 = D
exemplos:
    10: A
    7.5: A
    7.4: B
    2.5: C
    2.4: D
dificuldade: 2
linguagem: php
solucao: Utilizar elseif
categorias: [elseif]
=end
*/

// ENTRADA

$nota = $argv[1];

if     ($nota < 2.5) $conceito = "D";
elseif ($nota < 5.0) $conceito = "C";
elseif ($nota < 7.5) $conceito = "B";
else $conceito = "A";

// SAIDA

echo "$nota = $conceito";

?>