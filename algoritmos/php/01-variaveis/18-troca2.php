<?
/**
=begin
titulo: Trocar 2 números
enunciado: Troca o conteúdo entre duas variáveis
exemplos:
  11 22: 22 11
  22 11: 11 22

dificuldade: 1
linguagem: php
solucao: Utilizar uma variável temporária
categorias: [logica]
=end
*/

// ENTRADA

$a = $argv[1];
$b = $argv[2];

// LOGICA

// utilizar uma variável temporária para fazer a troca
$temp = $a;
$a = $b;
$b = $temp;

// SAIDA

echo "
$a $b

"

?>