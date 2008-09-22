#!/bin/env ruby

=begin
titulo: maior e menor de dois
enunciado: Criar um programa que receba dois números distintos e exiba qual o maior e o menor
exemplos:
  23 34: 34 > 23
  34 23: 34 > 23
	34 34: os números são iguais
dificuldade: 2
linguagem: ruby
solucao: utilizando if e else
categorias: [logica, if, else, elseif]
=end

# ENTRADA

n1 = ARGV[0].to_i
n2 = ARGV[1].to_i

# LOGICA

iguais = false
if n1 == n2
	iguais = true
elsif n1 > n2
	maior = n1
	menor = n2
else
	maior = n2
	menor = n1
end

# SAIDA

if iguais
	puts "os números são iguais"
else
	puts "#{maior} > #{menor}"
end