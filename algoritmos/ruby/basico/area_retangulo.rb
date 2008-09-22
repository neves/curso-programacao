#!/bin/env ruby

=begin
titulo: Area do Retângulo
enunciado: Criar um programa que receba a largura e altura do retângulo e exiba sua área
exemplos:
  1 1: 1m x 1m = 1m2
  2 1: 2m x 1m = 2m2
	1 2: 1m x 2m = 2m2
	2 2: 2m x 2m = 4m2
	9 5: 9m x 5m = 45m2
dificuldade: 1
linguagem: ruby
solucao: Apenas multiplicação simples.
categorias: [matematica]
=end

# ENTRADA
largura = ARGV.first.to_i
altura = ARGV.last.to_i

# LÓGICA
area = largura * altura

# SAÍDA
puts "#{largura}m x #{altura}m = #{area}m2"