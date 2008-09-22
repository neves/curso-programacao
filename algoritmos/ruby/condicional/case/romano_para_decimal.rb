#!/bin/env ruby

=begin
titulo: Romano para Decimal
enunciado: Recebe um número romano de 1 à 10 e exibe seu valor em decimal
exemplos:
  I: I = 1
  II: II = 2
  III: III = 3
  IV: IV = 4
  V: V = 5
  VI: VI = 6
  VII: VII = 7
  VIII: VIII = 8
  IX: IX = 9
  X: X = 10
dificuldade: 1
linguagem: ruby
solucao: Utilizar o case
categorias: [case]
=end

# ENTRADA
romano = ARGV.first.upcase

# LÓGICA
decimal = case romano
  when    "I": 1
  when   "II": 2
  when  "III": 3
  when   "IV": 4
  when    "V": 5
  when   "VI": 6
  when  "VII": 7
  when "VIII": 8
  when   "IX": 9
  when    "X": 10
end

# SAÍDA
puts "#{romano} = #{decimal}"