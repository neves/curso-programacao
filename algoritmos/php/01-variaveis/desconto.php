<?

/*@

@Titulo: Desconto Percentual

@Enunciado: Calcular o valor de desconto e o valor final,
dado o preço do produto e a porcentagem de desconto.

@Objetivo: Aprender a utilizar a função printf para formatar casas decimais de moéda.

@Entrada: Preço do produto e porcentagem de desconto

@Saída:
Preço: R$ 240,00
Desconto: 15% (R$ -36,00)
Preço com Desconto: R$ 204,00

@Dica: Utilizar a função printf para escrever os dados formatados.
Para escrever valores monetários use a máscara: "%01.2f" e para escrever o 
caracter % use: "%%".
Usar também setlocale(LC_NUMERIC, "ptb"); para usar vírgula no lugar de ponto
como separador das casas decimais.

@Dificuldade: 2

@Categoria: String

@Aula: 1

@ordem: 25

@*/

// .............................. ENTRADA ..............................

$preco = 240;
$porcentagem = 15;

/*/
$preco = $argv[1];
$porcentagem = $argv[2];
//*/

// .............................. LÓGICA ..............................

$desconto = $preco * $porcentagem / 100;
$precoFinal = $preco - $desconto;

// .............................. SAÍDA ..............................

$saida =
"
Preço: R$ %01.2f
Desconto: %d%% (R$ -%01.2f)
Preço com Desconto: R$ %01.2f
";

// para formatação utilizar vírgula ao invés de ponto para separador de casas decimais
// "portuguese-brazil" ou "ptb" 
setlocale(LC_NUMERIC, "ptb");

printf($saida, $preco, $porcentagem, $desconto, $precoFinal);

?>