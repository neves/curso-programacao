<?
/**
=begin
titulo: Contador de Início ao Fim Apenas dos Pares
enunciado: Exibir a contagem numérica de início até fim informados na entrada, mas apenas dos números pares.
exemplos:
    1 10: 2 4 6 8 10
dificuldade: 1
linguagem: php
solucao: Inicializar o for com $inicio e comparar o contador com $fim
categorias: [for, if]
=end
*/

// ENTRADA

$inicio = $argv[1];
$fim = $argv[2];

// SAIDA

for ($i = $inicio; $i <= $fim; $i++)
  if ($i % 2 == 0) echo "$i ";

?>