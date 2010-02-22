<?
/**
=begin
titulo: Sorteio entre min e max com Aposta
enunciado: Sorteia um nъmero entre min e max e diz se acertou com a aposta da entrada.
exemplos:
  1 10 5: entre 1 e 10 voce acertou o numero 5
  1 10 6: entre 1 e 10 voce errou o numero 4 apostando no 6
dificuldade: 1
linguagem: php
solucao: Utilizar a funзгo mt_rand($min, $max)
categorias: [api, ternario]
=end
*/

// ENTRADA

$min = $argv[1];
$max = $argv[2];
$aposta = $argv[3];

// LOGICA

$sorteio = mt_rand($min, $max);
$acertou = $sorteio == $aposta;

// SAIDA

echo $acertou ? "entre $min e $max voce acertou o numero $sorteio"
              : "entre $min e $max voce errou o numero $sorteio apostando no $aposta";

?>