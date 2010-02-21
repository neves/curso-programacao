<?
/**
=begin
titulo: Calculadora
enunciado: Dado um nъmero, um operador e outro nъmero, exibir a operaзгo desejada.
exemplos:
  5 x 6: 5 x 6 = 30
  10 + 34: 10 + 34 = 44
  21 - 1: 21 - 1 = 20
  18 / 2: 18 / 2 = 9
  3 % 2: operador % invalido!
dificuldade: 2
linguagem: php
solucao: Utilizar o switch para decidir qual operaзгo executar
categorias: [aritmetica]
=end
*/
// ENTRADA

$n1 = $argv[1];
$op = $argv[2];
$n2 = $argv[3];

// LOGICA

switch($op):
  case "+": $r = $n1 + $n2; break;
  case "-": $r = $n1 - $n2; break;
  case "/": $r = $n1 / $n2; break; 
  case "x":
  case "*":
    $r = $n1 * $n2;
  break;
  default:
    exit("operador $op invalido!");
endswitch;

// SAIDA

echo "
$n1 $op $n2 = $r

";

?>