<?

/*@

@Titulo: Boletim Escolar

@Enunciado: Dado as notas dos 4 bimestres,
calcular a média anual do aluno.

@Objetivo: Criar uma situação real,
misturando manipulação de string, variáveis, float e aritimética

@Entrada: 4 Notas de 0 à 10

@Saída:
Notas dos Bimestres
====================
1 Bimestre: 7.2
2 Bimestre: 6.3
3 Bimestre: 5.1
4 Bimestre: 4.6
--------------------
Média Anual: 5.8

@Dica: Fórmula da média: "(a + b + c + d) / 4"

@Dificuldade: 1

@Categoria: Operadores Básicos, Aritimética, float

@Aula: 1

@ordem: 60

@*/

// .............................. ENTRADA ..............................

$b1 = 7.2;
$b2 = 6.3;
$b3 = 5.1;
$b4 = 4.6;

$p1 = 1;
$p2 = 2;
$p3 = 3;
$p4 = 4;

/*/ Descomentar para testar entrada de dados pelo DOS
$b1 = $argv[1];
$p1 = $argv[2];

$b2 = $argv[3];
$p2 = $argv[4];

$b3 = $argv[5];
$p3 = $argv[6];

$b4 = $argv[7];
$p4 = $argv[8];
//*/

// .............................. LÓGICA ..............................

$soma = $b1*$p1 + $b2*$p2 + $b3*$p3 + $b4*$p4;
$pesos = $p1 + $p2 + $p3 + $p4;
$media = $soma / $pesos;

setlocale(LC_NUMERIC, "ptb");

// .............................. SAÍDA ..............................

echo "
Notas dos Bimestres
====================
1 Bimestre: $b1
2 Bimestre: $b2
3 Bimestre: $b3
4 Bimestre: $b4
--------------------
Média Anual: $media
";

?>