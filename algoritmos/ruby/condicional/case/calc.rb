#!/bin/env ruby

=begin
titulo: Calculadora
enunciado: Recebe um número, um operador e outro número e exibe a conta
exemplos:
  12 + 4: 12 + 4 = 16
  12 - 4: 12 - 4 = 8
  12 x 4: 12 x 4 = 48
  12 / 4: 12 / 4 = 3
dificuldade: 2
linguagem: ruby
solucao: Utilizar o case
categorias: [matematica, case]
=end

# ENTRADA
n1 = ARGV[0].to_i
op = ARGV[1]
n2 = ARGV[2].to_i

# LÓGICA
resultado = case op
  when "+": n1 + n2
  when "-": n1 - n2
  when "x": n1 * n2
  when "/": n1 / n2
end

# SAÍDA
puts "#{n1} #{op} #{n2} = #{resultado}"