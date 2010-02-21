<?
/**
=begin
titulo: Área e Perímetro do Quadrado
enunciado: "Recebe 1 número correspondente a medida do lado do quadrado e
  exibe a medida do perímetro e da área do quadrado."
exemplos:
  5: |
    O quadrado de lado 5cm,
    possui area de 25cm2 quadrados e
    perimetro de 20cm.
  10: |
    O quadrado de lado 10cm,
    possui area de 100cm2 quadrados e
    perimetro de 40cm.

dificuldade: 1
linguagem: php
solucao: "O perímetro é a soma dos lados do quadrado e a área é o lado ao quadrado."
categorias: [aritmetica]
=end
*/
// ENTRADA

$lado = $argv[1];

// LOGICA

$area = $lado * $lado;
$perimetro = 4 * $lado;

// SAIDA

echo "
O quadrado de lado {$lado}cm,
possui area de {$area}cm2 quadrados e
perimetro de {$perimetro}cm.

";

?>