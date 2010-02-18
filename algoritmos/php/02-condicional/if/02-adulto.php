<?

/*@

@Titulo: Maioridade

@Enunciado: Permitir o acesso apenas para maiores de idade.

@Objetivo: Primeiro exemplo de condicional.

@Entrada: Um número inteiro correspondente a idade do visitante.

@Saída:
Acesso Permitido. Bem Vindo!
ou
Acesso Negado, você precisa ser maior de idade para entrar neste site.

@Dica: Verificar se a idade informada é maior ou igual a 18 anos

@Dificuldade: 1

@Categoria: if

@Aula: 2

@ordem 1

@*/

// .............................. INICIALIZAÇÃO ..............................

$idade = 18;

// .............................. ENTRADA ..............................

//$idade = $argv[1];

// .............................. PROCESSAMENTO ..............................

$adulto = $idade >= 18;

// .............................. SAÍDA ..............................

if ($adulto)
	echo "Acesso Permitido. Bem Vindo!";
else
	echo "Acesso Negado,
você possui $idade anos e precisa ser maior de idade para entrar neste site.";

?>