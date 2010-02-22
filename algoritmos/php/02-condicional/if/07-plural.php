<?
/**
=begin
titulo: Plural
enunciado: Exibir a palavra no plural quando necessário, baseado no resultado da busca.
exemplos:
    0: 0 produtos encontrados.
    1: 1 produto encontrado.
    2: 2 produtos encontrados.
dificuldade: 1
linguagem: php
solucao: Concatenar o s no final das palavras.
categorias: [ternario]
=end
*/

// ENTRADA

$resultados = $argv[1];

// LOGICA

$s = $resultados == 1 ? "" : "s";

// SAIDA

echo "$resultados produto$s encontrado$s.";

?>