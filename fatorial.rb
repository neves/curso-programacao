#!/bin/env ruby

=begin
titulo: fatorial
enunciado: Criar um programa que receba um número e exiba seu fatorial
exemplos:
	0: 0! = 1
  1: 1! = 1
  2: 2! = 2
	3: 3! = 6
  5: 5! = 120
	10: 10! = 3628800
dificuldade: 3
linguagem: ruby
solucao: método recursivo adicionado a classe Integer
categorias: [matematica, recursividade, funcao, ternario]
=end

# ENTRADA

n = ARGV.first.to_i

#LOGICA 

class Integer
  def fatorial
    self > 1 ? self * (self - 1).fatorial : 1
  end
end

fatorial = n.fatorial

# SAIDA

puts "#{n}! = #{fatorial}"
