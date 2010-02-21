<?
/**
=begin
titulo: maior e Menor Entre Quatro Números
enunciado: Receba quatro números distintos e exibe o menor e maior
exemplos:
    1 2 3 4: 1 < 4
    1 2 4 3: 1 < 4
    1 3 2 4: 1 < 4
    1 3 4 2: 1 < 4
    1 4 2 3: 1 < 4
    1 4 3 2: 1 < 4

    2 1 3 4: 1 < 4
    2 1 4 3: 1 < 4
    2 3 1 4: 1 < 4
    2 3 4 1: 1 < 4
    2 4 1 3: 1 < 4
    2 4 3 1: 1 < 4

    3 1 2 4: 1 < 4
    3 1 4 2: 1 < 4
    3 2 1 4: 1 < 4
    3 2 4 1: 1 < 4
    3 4 1 2: 1 < 4
    3 4 2 1: 1 < 4

    4 1 2 3: 1 < 4
    4 1 3 2: 1 < 4
    4 2 1 3: 1 < 4
    4 2 3 1: 1 < 4
    4 3 1 2: 1 < 4
    4 3 2 1: 1 < 4
dificuldade: 3
linguagem: php
solucao: descobre o maior entre dois e repete o processo com os próximos. Faz o mesmo para o menor.
categorias: [if, ternario]
=end
*/

// ENTRADA
$n1 = $argv[1];
$n2 = $argv[2];
$n3 = $argv[3];
$n4 = $argv[4];

// LÓGICA
$maior = $n1 > $n2 ? $n1 : $n2;
if ($n3 > $maior) $maior = $n3;
if ($n4 > $maior) $maior = $n4;

$menor = $n1 < $n2 ? $n1 : $n2;
if ($n3 < $menor) $menor = $n3;
if ($n4 < $menor) $menor = $n4;

// SAÍDA
echo "
$menor < $maior

";

?>