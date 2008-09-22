#!/bin/env ruby

=begin
titulo: Area do Quadrado
enunciado: Criar um programa que receba o lado do quadrado e exiba sua área
exemplos:
  1: Area do quadrado de lado 1 = 1
  2: Area do quadrado de lado 2 = 2
	9: Area do quadrado de lado 9 = 81
dificuldade: 1
linguagem: ruby
solucao: Utilizando o operador de potência **
categorias: [matematica]
=end

# ENTRADA
lado = ARGV.first.to_i

# LÓGICA
area = lado ** 2

# SAÍDA
puts "Area do quadrado de lado #{lado} = #{area}"