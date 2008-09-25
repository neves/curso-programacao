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
  @@extenso[200] = "duzentos"
  @@extenso[300] = "trezentos"
  @@extenso[400] = "quatrocentos"
  @@extenso[500] = "quinhentos"
  @@extenso[600] = "seiscentos"
  @@extenso[700] = "setecentos"
  @@extenso[800] = "oitocentos"
  @@extenso[900] = "novecentos"
  @@extenso[1000] = "mil"

  # retorna um array com os digitos do número
	def digitos
    self.to_s.each_char.map{|i| i.to_i}.to_a
	end

  # retorna um array com unidade, dezena, centena, etc ...
  def partes
    digitos.reverse.each_with_index.map{|n, i| 10**i * n}.reverse
  end

	def por_extenso
    return @@extenso[self] unless @@extenso[self].nil?
    numeros = partes
    trata_11_ate_19(numeros)
    numeros.reject{|n| n.zero?}.
            collect { |n| n == 100 ? "cento" : @@extenso[n] }.
            join " e "
	end

  private
  # os números de 11 à 19 precisam de um tratamento especial
  def trata_11_ate_19(numeros)
    if numeros.size >= 3 && numeros[-2] == 10 && numeros[0] != 0
      numeros[-1] = numeros.pop + numeros[-1]
    end
  end
end
Fixnum.send :include, NumeroPorExtenso

# SAIDA

puts n.por_extenso