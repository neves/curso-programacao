<?
/**
=begin
titulo: Segundos em Horas:Minutos:Segundos
enunciado: Exibir um valor de segundos em Horas:Minutos:Segundos
exemplos:
  9: 9 segundos = 00:00:09
  129: 129 segundos = 00:02:09
  3669: 3669 segundos = 01:01:09
dificuldade: 2
linguagem: php
solucao: "A divisão inteira por 3600 é a quantidade de horas e o resto divide-se novamente por 60
sobrando de resto os segundos."
categorias: [aritmetica, saida]
=end
*/

// ENTRADA
$total_segundos = $argv[1];

// LOGICA

$horas = floor($total_segundos / 3600);
$resto = $total_segundos % 3600;
$minutos = floor($resto / 60);
$segundos = $resto % 60;

// SAIDA

printf("%d segundos = %02d:%02d:%02d", $total_segundos, $horas, $minutos, $segundos);

?>