
# ENTRADA
palavra = ARGV.first

# LOGICA

palindrome = palavra == palavra.reverse

# SAIDA

if palindrome
  puts "A palavra #{palavra} eh palindrome"
else
  puts "A palavra #{palavra} NAO eh palindrome"
end