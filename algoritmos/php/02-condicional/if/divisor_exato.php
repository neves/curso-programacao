<?

/*@

@Titulo: Resto da Divisใo

@Enunciado: Dado dois n๚meros de entrada,
dizer se o primeiro ้ divisor exato do segundo.
Caso nใo for, mostrar o resto da divisใo, exemplo:
3 ้ divisor exato de 33 com resultado 11
3 nใo ้ divisor exato de 33, pois a divisใo ้ 11 e o resto ้ 2

@Objetivo: Aprender o operador para calcular o resto da divisใo

@Entrada: Dois N๚meros

@Saํda:
3 ้ divisor exato de 33 com resultado 11
OU
3 nใo ้ divisor exato de 33, pois a divisใo ้ 11 e o resto ้ 2


@Dica: Para verificar se um n๚mero ้ divisํvel por outro,
basta dividํ-lo usando o operador de resto e verificar se o resultado ้ zero.
Exemplo: 33 % 3 == 0 mas 35 % 3 == 2 o primeiro ้ divisํvel exato por 3, mas o segundo nใo, 
pois retornou resto 2.

@Dificuldade: 1

@Categoria: Operadores Bแsicos, Aritim้tica

@Aula: 1

@ordem 25

@*/

// .............................. INICIALIZAวรO ..............................

$x = 35;
$y = 3;

// .............................. ENTRADA ..............................

/*/ Descomentar para testar entrada de dados pelo DOS
$x = $argv[1];
$y = $argv[2];
//*/

// .............................. PROCESSAMENTO ..............................

$divisao = floor($x / $y);
$resto = $x % $y;
$isDivisorExato = $resto == 0;

// .............................. SAอDA ..............................

if ($isDivisorExato)
	echo "$y ้ divisor exato de $x com resultado $divisao";
else
	echo "$y nใo ้ divisor exato de $x, pois a divisใo ้ $divisao e o resto ้ $resto";

?>