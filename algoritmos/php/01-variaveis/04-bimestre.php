<?
/**
=begin
titulo: Notas dos Bimestres
enunciado: Recebe a nota de cada bimestre e exibe a média final
exemplos:
  40 50 60 70: |
    Notas dos Bimestres
    ===================
    1 Bimestre: 40
    2 Bimestre: 50
    3 Bimestre: 60
    4 Bimestre: 70
    -------------------
    Media Anual: 55
  90 70 50 30: |
    Notas dos Bimestres
    ===================
    1 Bimestre: 90
    2 Bimestre: 70
    3 Bimestre: 50
    4 Bimestre: 30
    -------------------
    Media Anual: 60

dificuldade: 1
linguagem: php
solucao: Somar as notas e dividir por 4
categorias: [saida, aritimetica]
=end
*/

// ENTRADA

$b1 = $argv[1];
$b2 = $argv[2];
$b3 = $argv[3];
$b4 = $argv[4];

// LOGICA

$media = ($b1 + $b2 + $b3 + $b4) / 4;

// SAIDA

echo "
Notas dos Bimestres
===================
1 Bimestre: $b1
2 Bimestre: $b2
3 Bimestre: $b3
4 Bimestre: $b4
-------------------
Media Anual: $media

";

?>