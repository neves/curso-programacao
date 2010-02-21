<?
/**
=begin
titulo: Sorteio entre min e max
enunciado: Sorteia um nъmero entre min e max informado na entrada.
exemplos:
  10 10: sorteado o numero 10 entre 10 e 10.
  1 2: sorteado o numero 1 entre 1 e 2.
dificuldade: 1
linguagem: php
solucao: Utilizar a funзгo mt_rand($min, $max)
categorias: [api]
=end
*/

// ENTRADA

$min = $argv[1];
$max = $argv[2];

// LOGICA

$sorteio = mt_rand($min, $max);

// SAIDA

echo "
sorteado o numero $sorteio entre $min e $max.

";

?>