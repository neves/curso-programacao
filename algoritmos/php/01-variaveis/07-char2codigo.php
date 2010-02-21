<?
/**
=begin
titulo: Converter char para ASCII
enunciado: Recebe um caracter e retorna seu cуdigo ASCII
exemplos:
  A: A = 65
  @: @ = 64
  0: 0 = 48
dificuldade: 1
linguagem: php
solucao: Utilizar a funзгo ord("@")
categorias: [api]
=end
*/

// ENTRADA

$char = $argv[1];

// LOGICA

$codigo = ord($char);

// SAIDA

echo "
$char = $codigo

"

?>