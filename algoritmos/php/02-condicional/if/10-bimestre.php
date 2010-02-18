<?

/*@

@Titulo: Aprovado/Reprovado

@Enunciado: Dado as notas dos 4 bimestres,
calcular a média anual do aluno e dizer se ele está aprovado ou reprovado.

@Objetivo: Utilizar o operador ternário
isolando lógica da saída

@Entrada: 4 Notas de 0 à 10

@Saída:
Notas dos Bimestres
====================
1 Bimestre: 7.2
2 Bimestre: 6.3
3 Bimestre: 5.1
4 Bimestre: 4.6
--------------------
Média Anual: 5.8 = Aluno Reprovado!

@Dica: Fórmula da média: "(a + b + c + d) / 4".
Armazenar a string APROVADO/REPROVADO utilizando o operador ternário

@Dificuldade: 1

@Categoria: Operador Ternário

@Aula: 2

@ordem 30

@*/

// .............................. INICIALIZAÇÃO ..............................

$b1 = 7.2;
$b2 = 6.3;
$b3 = 5.1;
$b4 = 4.6;

// .............................. ENTRADA ..............................

/*/ Descomentar para testar entrada de dados pelo DOS
$b1 = $argv[1];
$b2 = $argv[2];
$b3 = $argv[3];
$b4 = $argv[4];
//*/

// .............................. PROCESSAMENTO ..............................

// PROCESSAMENTO
$media = ($b1 + $b2 + $b3 + $b4) / 4;
$aprovado = $media >= 60;

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

echo $aprovado "APROVADO" : "REPROVADO";

?>