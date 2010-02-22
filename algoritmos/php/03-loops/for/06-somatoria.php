<?
/**
=begin
titulo: Somatória
enunciado: Dado um início e fim, mostrar a soma dos números no intervalo.
exemplos:
    1 2: 1 + 2 = 3
    5 7: 5 + 6 + 7 = 18
    20 25: 20 + 21 + 22 + 23 + 24 + 25 = 135
dificuldade: 3
linguagem: php
solucao: Somar em um for e exibir em outro. Concatena o sinal de + em todos menos no último.
categorias: [for, ternario]
=end
*/

// ENTRADA
$inicio = $argv[1];
$fim = $argv[2];

// LOGICA
$soma = 0;
for ($i = $inicio; $i <= $fim; $i++)
  $soma += $i;

// SAIDA

for ($i = $inicio; $i <= $fim; $i++):
  echo "$i ";
  echo $i == $fim ? "= " : "+ ";
endfor;

echo $soma;

?>