<?

/*@

@Titulo: Par ou Ímpar

@Enunciado: Dado um número de entrada, dizer se é par ou ímpar.

@Objetivo: Testar condicional em que o valor testado é o resultado de outra operação.

@Entrada: Um número inteiro.

@Saída:
8 é par
OU
13 é impar

@Dica: Se o resto da divisão por 2 for zero, então o número é par

@Dificuldade: 1

@Categoria: if

@Aula: 2

@ordem 10

@*/

// .............................. INICIALIZAÇÃO ..............................

$n = 6;

// .............................. ENTRADA ..............................

//$n = $argv[1];

// .............................. PROCESSAMENTO ..............................

$resto = $n % 2;
$isPar = $resto == 0;

// .............................. SAÍDA ..............................

if ($isPar)
	echo "$n é par";
else
	echo "$n é impar";

?>