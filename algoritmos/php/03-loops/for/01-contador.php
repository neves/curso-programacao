<?
/**
=begin
titulo: Contador de Início ao Fim
enunciado: Exibir a contagem numérica de início até fim informados na entrada.
exemplos:
    1 10: 1 2 3 4 5 6 7 8 9 10
dificuldade: 0
linguagem: php
solucao: Inicializar o for com $inicio e comparar o contador com $fim
categorias: [for]
=end
*/

// ENTRADA

$inicio = $argv[1];
$fim = $argv[2];

// SAIDA

for ($i = $inicio; $i <= $fim; $i++)
  echo "$i ";

?>