# dado dois numeros de entrada, exibir sua soma.

# ENTRADA

n1 = ARGV[0]
n2 = ARGV[1]

# LOGICA

soma = n1 + n2

# SAIDA

puts "#{n1} + #{n2} = #{soma}"

# ou

puts "%d + %d = %d" % [n1, n2, soma]
