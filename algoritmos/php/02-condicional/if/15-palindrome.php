<?
/**
=begin
titulo: Palнndrome
enunciado: "Palнndrome й uma palavra ou nъmero que й igual se lido de traz pra frente.
  Receber uma entrada e apenas dizer se й palнndrome ou nгo."
exemplos:
    101: SIM
    2002: SIM
    A: SIM
    ABC: NAO
    ANA: SIM
    RADAR: SIM
dificuldade: 1
linguagem: php
solucao: "Utilizar a funзгo strrev para inverter uma string e comparar com ela mesma.
  Aplicar a funзгo trim na entrada, para remover os espaзos no comeзo e no fim da entrada."
categorias: [api, ternario]
=end
*/

// ENTRADA

$palavra = trim($argv[1]);

// LOGICA

$palindrome = $palavra == strrev($palavra);

// SAIDA

echo $palindrome ? "SIM" : "NAO";

?>