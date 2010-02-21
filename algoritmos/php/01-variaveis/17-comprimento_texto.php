<?
/**
=begin
titulo: Quantas letras tem a palavra
enunciado: Dado uma palavra de entrada, exibir a quantidade de letras
exemplos:
  paralelepipedo: A palavra paralelepipedo tem 14 letras
  otorrinolaringologista: A palavra otorrinolaringologista tem 22 letras
  ultramicroscopicosilicovulcanoconiose: A palavra ultramicroscopicosilicovulcanoconiose tem 37 letras

dificuldade: 1
linguagem: php
solucao: Utilizar a funчуo strlen para saber o comprimento de uma string.
categorias: [api]
=end
*/

// ENTRADA
$palavra = $argv[1];

// LOGICA
$qtde_letras = strlen($palavra);

// SAIDA

echo "
A palavra $palavra tem $qtde_letras letras

"

?>