require 'yaml'

file = ARGV.first || "algoritmos/php/01-variaveis/03-tabuada.php"
content = IO.read(file)
scan = content.scan(/=begin\n(.*)\n=end/m)
exit if scan.empty?
exemplos = YAML.load(scan.first.first)["exemplos"]

exemplos.each do |entrada, saida|
  entrada.to_s.strip!
  saida.to_s.strip!
  out = %x[php #{file} #{entrada}].strip
  if out != saida
    puts "saida:"
    puts out
    puts "esperava:"
    puts saida
  else
    puts "ok: #{entrada}"
  end
end