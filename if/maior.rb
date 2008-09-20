#!/bin/env ruby

=begin
titulo: maior de dois
enunciado: Criar um programa que receba dois números distintos e exiba qual o maior
exemplos:
  23 34: o maior entre 23 e 34 é o 34
  34 23: o maior entre 34 e 23 é o 34
dificuldade: 1
linguagem: ruby
solucao: utilizando operador ternario
categorias: [logica, ternario]
=end

# ENTRADA

n1 = ARGV[0].to_i
n2 = ARGV[1].to_i

# LOGICA

maior = n1 > n2 ? n1 : n2

# SAIDA

puts "o maior entre #{n1} e #{n2} é o #{maior}"
