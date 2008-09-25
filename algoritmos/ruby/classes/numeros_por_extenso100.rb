#!/usr/bin/ruby

# ENTRADA

n = ARGV.first.to_i

# LOGICA

module NumeroPorExtenso
	@@extenso = {}
	@@extenso[0] = "zero"
	@@extenso[1] = "um"
	@@extenso[2] = "dois"
	@@extenso[3] = "tres"
	@@extenso[4] = "quatro"
	@@extenso[5] = "cinco"
	@@extenso[6] = "seis"
	@@extenso[7] = "sete"
	@@extenso[8] = "oito"
	@@extenso[9] = "nove"

	@@extenso[10] = "dez"
	@@extenso[11] = "onze"
	@@extenso[12] = "doze"
	@@extenso[13] = "treze"
	@@extenso[14] = "quatorze"
	@@extenso[15] = "quinze"
	@@extenso[16] = "dezesseis"
	@@extenso[17] = "dezessete"
	@@extenso[18] = "dezoito"
	@@extenso[19] = "dezenove"

	@@extenso[20] = "vinte"
	@@extenso[30] = "trinta"
	@@extenso[40] = "quarenta"
	@@extenso[50] = "cinquenta"
	@@extenso[60] = "sessenta"
	@@extenso[70] = "setenta"
	@@extenso[80] = "oitenta"
	@@extenso[90] = "noventa" 
  @@extenso[100] = "cem"

  # retorna um array com os digitos do número
	def digitos
    self.to_s.each_char.map{|i| i.to_i}.to_a
	end

  # retorna um array com unidade, dezena, centena, etc ...
  def partes
    digitos.reverse.each_with_index.map{|n, i| 10**i * n}.reverse
  end

	def to_extenso
    return @@extenso[self] unless @@extenso[self].nil?
    partes.map{|n| @@extenso[n]}.join " e "
	end

end

Fixnum.send :include, NumeroPorExtenso

# SAIDA

n.times{|i| p i.to_extenso}
