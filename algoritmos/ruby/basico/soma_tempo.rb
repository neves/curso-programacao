#!/usr/bin/ruby

=begin
titulo: Soma de tempos
enunciado: Receba dois valores em horas e exibe a soma em horas
exemplos:
  00 59 00 01: 00h59 + 00h01 = 01h00
  00 58 00 01: 00h58 + 00h01 = 00h59
  03 30 03 30: 03h30 + 03h30 = 07h00
dificuldade: 2
linguagem: ruby
solucao: Utilizar divisao e modulo por 60
categorias: [matematica]
=end

# ENTRADA
h1 = ARGV[0].to_i
m1 = ARGV[1].to_i
h2 = ARGV[2].to_i
m2 = ARGV[3].to_i

# LÓGICA
soma_hora = h1 + h2
soma_minutos = m1 + m2
soma_hora += soma_minutos / 60
soma_minutos = soma_minutos % 60

# SAÍDA
formato = "%02dh%02d"
puts "#{formato} + #{formato} = #{formato}" % [h1, m1, h2, m2, soma_hora, soma_minutos]
