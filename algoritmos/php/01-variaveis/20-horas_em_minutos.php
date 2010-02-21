<?
/**
=begin
titulo: Horas em Minutos
enunciado: Exibir horas em minutos
exemplos:
  1: 01:00 = 60 minutos
  10: 10:00 = 600 minutos
dificuldade: 1
linguagem: php
solucao: Multiplicar a quantidade de horas por 60
categorias: [aritmetica, saida]
=end
*/

// ENTRADA
$horas = $argv[1];

// LOGICA

$minutos = $horas * 60;

// SAIDA

printf("%02d:00 = %d minutos", $horas, $minutos);

?>