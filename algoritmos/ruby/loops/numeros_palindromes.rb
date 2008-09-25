
# ENTRADA
inicio = ARGV.first.to_i
fim = ARGV.last.to_i

# LOGICA

class Fixnum
  def palindrome?
    self.to_s == self.to_s.reverse
  end
end

numeros_palindromes = (inicio..fim).select {|n| n.palindrome?}

# SAIDA

p numeros_palindromes