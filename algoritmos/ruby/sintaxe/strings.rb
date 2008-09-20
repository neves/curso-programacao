nome = "aeiou"

puts nome.length
puts nome.size

puts nome[0]
puts nome[-1]

puts nome[0..2]
puts nome[1..-1]
puts nome[1..-2]
nome["e"] = "E"
puts nome
nome["o"] = "O"
puts nome
nome[1..-2] = "eIo"
puts nome

puts "dez cem mil".
    split(" ").
    reverse.
    map{ |palavra| palavra.upcase }.
    join(", ")

def teste
  puts <<-cummings
it's
spring
and
   the
      goat-footed
balloonMan   whistles
far
and
wee
  cummings
end

teste

puts <<x
Shall quips and sentences and these paper bullets of
the brain #{nome} awe a man from the career of his humour?
No, the world must be peopled. When I said I would
die a bachelor, I did not think I should live till I
were married. Here comes Beatrice. By this day!
she's a fair lady: I do spy some marks of love in
her.
x