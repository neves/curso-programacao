<?
/**
=begin
titulo: Cуdigo para Char
enunciado: Converter um cуdigo ASCII para seu respectivo caracter
exemplos:
  65: 65 = [A]
  64: 64 = [@]
  48: 48 = [0]
dificuldade: 1
linguagem: php
solucao: Utilizar a funзгo chr(65)
categorias: [api]
=end
*/

// ENTRADA

$codigo = $argv[1];

// LOGICA

$char = chr($codigo);

// SAIDA

echo "
$codigo = [$char]

"

?>