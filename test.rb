require 'yaml'

# encontra arquivos sem comentarios
Dir["algoritmos/php/**/*.php"].each do |file|
  next if file =~ /passos/
  next unless file =~ /\/\d\d-[^\/]+\.php/
  content = IO.read(file)
  scan = content.scan(/=begin\n(.*)\n=end/m)
  puts file if scan.empty?
end