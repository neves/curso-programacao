<?
/**
=begin
titulo: Trocar 4 números
enunciado: Recebe 4 entradas e exibe em ordem inversa
exemplos:
  1 2 3 4: 4 3 2 1
  9 8 7 6: 6 7 8 9
dificuldade: 2
linguagem: php
solucao: Utilizar uma variável temporária para as duas trocas
categorias: [logica]
=end
*/

// ENTRADA

$a = $argv[1];
$b = $argv[2];
$c = $argv[3];
$d = $argv[4];

// Trocar a e d
$temp = $a;
$a = $d;
$d = $temp;

// Trocar b e c
$temp = $c;
$c = $b;
$b = $temp;

// SAIDA

echo "
$a $b $c $d

"

?>