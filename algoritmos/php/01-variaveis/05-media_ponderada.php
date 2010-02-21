<?
/**
=begin
titulo: Notas dos Bimestres com Média ponderada
enunciado: "Recebe a nota de cada bimestre e exibe a média ponderada final,
  sendo que os pesos são 1, 2, 3 e 4 respectivamente para cada bimestre."
exemplos:
  40 50 60 70: |
    Notas dos Bimestres
    ===================
    1 Bimestre: 40
    2 Bimestre: 50
    3 Bimestre: 60
    4 Bimestre: 70
    -------------------
    Media Anual: 60
  90 70 50 30: |
    Notas dos Bimestres
    ===================
    1 Bimestre: 90
    2 Bimestre: 70
    3 Bimestre: 50
    4 Bimestre: 30
    -------------------
    Media Anual: 50

dificuldade: 1
linguagem: php
solucao: Somar as notas multiplicadas pelo peso e dividir pela soma dos pesos
categorias: [saida, aritimetica]
=end
*/

// DECLARACAO

define("PESO_B1", 1);
define("PESO_B2", 2);
define("PESO_B3", 3);
define("PESO_B4", 4);

// ENTRADA

$b1 = $argv[1];
$b2 = $argv[2];
$b3 = $argv[3];
$b4 = $argv[4];

// LOGICA

$soma = PESO_B1 * $b1 + PESO_B2 * $b2 + PESO_B3 * $b3 + PESO_B4 * $b4;
$pesos = PESO_B1 + PESO_B2 + PESO_B3 + PESO_B4;
$media = $soma / $pesos;

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