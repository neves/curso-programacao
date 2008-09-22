#!/bin/env ruby

=begin
titulo: Decimal para Romano
enunciado: Recebe um número de 1 à 10 em decimal e exibe seu valor em romano
exemplos:
  1: o numero 1 em romano = I
  2: o numero 2 em romano = II
  3: o numero 3 em romano = III
  4: o numero 4 em romano = IV
  5: o numero 5 em romano = V
  6: o numero 6 em romano = VI
  7: o numero 7 em romano = VII
  8: o numero 8 em romano = VIII
  9: o numero 9 em romano = IX
  10: o numero 10 em romano = X
dificuldade: 1
linguagem: ruby
solucao: Utilizar o case combinado com matemática
categorias: [matematica, case]
=end

# ENTRADA
decimal = ARGV.first.to_i

# LÓGICA
romano = case decimal
  when 1..3: "I" * decimal
  when    4: "IV"
  when    5: "V"
  when 6..8: "V" + "I" * (decimal - 5)
  when    9: "IX"
  when   10: "X"
end

# SAÍDA
puts "o numero #{decimal} em romano = #{romano}"