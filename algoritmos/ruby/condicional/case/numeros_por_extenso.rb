#!/usr/bin/ruby
#
# ENTRADA
n = ARGV.first.to_i

# LOGICA

extenso = case n
	when 0: "zero"
	when 1: "um"
	when 2: "dois"
	when 3: "tres"
	when 4: "quatro"
	when 5: "cinco"
	when 6: "seis"
	when 7: "sete"
	when 8: "oito"
	when 9: "nove"
	when 10: "dez"
	when 11: "onze"
	when 12: "doze"
	when 13: "treze"
	when 14: "quatorze"
	when 15: "quinze"
	when 16: "dezesseis"
	when 17: "dezessete"
	when 18: "dezoito"
	when 19: "dezenove"
	when 20: "vinte"
end

# SAIDA

puts extenso
