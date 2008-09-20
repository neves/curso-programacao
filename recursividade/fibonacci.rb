#!/bin/env ruby

=begin
titulo: fibonacci
enunciado: Criar um programa que receba um número e exiba o seu fibonacci
exemplos:
	0: fib(0) = 0
	1: fib(1) = 1
	2: fib(2) = 1
	3: fib(3) = 2
	4: fib(4) = 3
	5: fib(5) = 5
	6: fib(6) = 8
	7: fib(7) = 13
	21: fib(21) = 10946
dificuldade: 4
linguagem: ruby
solucao: método recursivo adicionado a classe Integer
categorias: [matematica, recursividade, funcao]
=end

# ENTRADA

n = ARGV.first.to_i

#LOGICA 

class Integer
  def fibonacci
		return 0 if self == 0
		return 1 if self == 1
		return (self - 1).fibonacci + (self - 2).fibonacci
  end
end

fibonacci = n.fibonacci

# SAIDA

puts "fib(#{n}) = #{fibonacci}"
