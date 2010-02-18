<?
/**
=begin
titulo: maior de trкs
enunciado: Criar um programa que receba trкs nъmeros distintos e exiba qual o maior
exemplos:
    1 2 3: o maior entre 1, 2 e 3 eh o 3
    1 3 2: o maior entre 1, 3 e 2 eh o 3
    2 1 3: o maior entre 2, 1 e 3 eh o 3
    2 3 1: o maior entre 2, 3 e 1 eh o 3
    3 1 2: o maior entre 3, 1 e 2 eh o 3
    3 2 1: o maior entre 3, 2 e 1 eh o 3
dificuldade: 3
linguagem: php
solucao: compara todos os nъmeros entre si. 
        Esta й a pior soluзгo, pois a complexidade aumenta com a quantidade de nъmeros.
categorias: [logica, if, else, elseif]
ordem: 3.1
=end
*/
// ENTRADA
$n1 = 1;
$n2 = 2;
$n3 = 3;

// LУGICA
if ($n1 > $n2 && $n1 > $n3)
    $maior = $n1;
elseif ($n2 > $n1 && $n2 > $n3)
    $maior = $n2;
else
    $maior = $n3;

// SAНDA
echo "o maior entre $n1, $n2 e $n3 eh o $maior";

?>