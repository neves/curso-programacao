<?
/**
=begin
titulo: Minutos em Horas:Minutos
enunciado: Exibir um valor de minutos em Horas:Minutos
exemplos:
  21: 21 minutos = 00:21
  60: 60 minutos = 01:00
  130: 130 minutos = 02:10
  650: 650 minutos = 10:50
dificuldade: 1
linguagem: php
solucao: A divisão inteira é a quantidade de horas e o resto a quantidade de minutos
categorias: [aritmetica, saida]
=end
*/

// ENTRADA
$total_minutos = $argv[1];

// LOGICA

$horas = floor($total_minutos / 60);
$minutos = $total_minutos % 60;

// SAIDA

printf("%d minutos = %02d:%02d", $total_minutos, $horas, $minutos);

?>