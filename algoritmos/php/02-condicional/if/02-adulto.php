<?
/**
=begin
titulo: Acesso para adulto
enunciado: Fazer um programa que recebe uma idade e diz se a pessoa tem acesso ao site proibido para menores de 18 anos.
exemplos:
    17: Acesso Negado!
    18: Acesso Permitido. Bem Vindo!
    19: Acesso Permitido. Bem Vindo!
dificuldade: 0
linguagem: php
solucao: Utilizando if ou operador ternário
categorias: [if, ternario]
=end
*/

// ENTRADA

$idade = $argv[1];

// LOGICA

$adulto = $idade >= 18;

// SAIDA

if ($adulto)
	echo "Acesso Permitido. Bem Vindo!";
else
	echo "Acesso Negado!";

// utilizando operador ternário
// echo $adulto ? "Acesso Permitido. Bem Vindo!" : "Acesso Negado!";

?>