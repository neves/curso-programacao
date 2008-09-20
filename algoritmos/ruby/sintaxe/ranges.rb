# Range é uma classe top, que representa uma sequência com o último valor incluso (..) ou não (...)

um_ate_dez  = 1..10 # dois pontos inclui o último valor
um_ate_nove = 1...9 # três pontos exclui o último valor
alfabeto = "a".."z" # também funciona com letras
alfabeto = Range.new("a", "z") # mesmo acima, mas utilizando a class para instanciar

puts um_ate_dez.to_a # converte para array
puts um_ate_nove === 10 # O operador === verifica se o 10 está dentro do Range

# pode ser utilizado diretamente em loops
for letra in alfabeto
  print letra
end