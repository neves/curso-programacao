<?
/**
=begin
titulo: Contador de Início ao Fim Apenas dos Divisores Inteiros
enunciado: "Exibir a contagem numérica de início até fim informados na entrada,
  mas apenas dos números que são divisores inteiros pela terceira entrada."
exemplos:
    0 20 5: 0 5 10 15 20
    1 100 9: 9 18 27 36 45 54 63 72 81 90 99
dificuldade: 1
linguagem: php
solucao: Fazer o módulo do contador pela terceira entrada e comparar com zero.
categorias: [for, if]
=end
*/

// ENTRADA

$inicio = $argv[1];
$fim = $argv[2];
$divisor = $argv[3];

// SAIDA

for ($i = $inicio; $i <= $fim; $i++)
  if ($i % $divisor == 0) echo "$i ";

?>