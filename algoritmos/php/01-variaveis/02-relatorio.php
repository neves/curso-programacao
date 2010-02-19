<?

/**
=begin
titulo: Exibir dados formatados
enunciado: |
  Criar um programa que exiba a seguinte saída utilizando variáveis para os dados:
  ____________________Dados Cadastrais____________________
  Nome : John Doe
  Email: john.doe@gmail.com
  Idade: 64 anos
  Local: Maringa/PR
  Sexo : Masculino
  ========================================================
dificuldade: 0
linguagem: php
categorias: [saida]
=end
*/

// ENTRADA

$nome = "John Doe";
$email = "john.doe@gmail.com";
$idade = 64;
$estado = "PR";
$cidade = "Maringa";
$sexo = "Masculino";

// SAIDA

echo "
____________________Dados Cadastrais____________________
Nome : $nome
Email: $email
Idade: $idade anos
Local: $cidade/$estado
Sexo : $sexo
========================================================

";

?>