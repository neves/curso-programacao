<?
/**
=begin
titulo: Maior e Menor Entre Três
enunciado: Recebe 3 números distintos e acha o menor e o maior
exemplos:
    1 2 3: 1 < 3
    1 3 2: 1 < 3
    2 1 3: 1 < 3
    2 3 1: 1 < 3
    3 1 2: 1 < 3
    3 2 1: 1 < 3
dificuldade: 3
linguagem: php
solucao: Utilizar a mesma solução do 30-maior3.php para achar o maior e menor
categorias: [if]
=end
*/
// ENTRADA

$n1 = $argv[1];
$n2 = $argv[2];
$n3 = $argv[3];

// LOGICA

$maior = $n1; // primeiro descobre o maior
if ($n2 > $maior) $maior = $n2;
if ($n3 > $maior) $maior = $n3;

$menor = $n1; // faz o mesmo para descobrir o menor
if ($n2 < $menor) $menor = $n2;
if ($n3 < $menor) $menor = $n3;

// SAIDA

echo "
$menor < $maior

";

?>