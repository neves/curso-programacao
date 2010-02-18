<?

/*@

@Titulo: Diferença Entre Números

@Enunciado: Calcular a diferença entre dois números.

@Objetivo: if utilizado no processamento e não direto na saída.

@Entrada: Dois Números

@Saída:
A diferença entre 7  e 12  = 5
A diferença entre 12  e 7  = 5

@Dica: Verificar quem é o maior, para subtrair sempre o menor do maior

@Dificuldade: 1

@Categoria: if

@Aula: 2

@ordem 5

@*/

// .............................. INICIALIZAÇÃO ..............................

$n1 = 12;
$n2 = 7;

// .............................. ENTRADA ..............................

/*
$n1 = $argv[1];
$n2 = $argv[2];
//*/

// .............................. PROCESSAMENTO ..............................

if ($n1 > $n2)
	$diferenca = $n1 - $n2;
else
	$diferenca = $n2 - $n1;

// .............................. SAÍDA ..............................

echo "A diferença entre $n1 e $n2 = $diferenca";

?>