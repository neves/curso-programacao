# variáveis locais
nome = "Marcos"
sobre_nome = 'Neves'
_idade = 27

# ou inicializar em apenas 1 linha:
nome, sobre_nome, _idade = "Marcos", 'Neves', 27

def metodo
  local = 'visível apenas aqui, dentro do método'
end

# variáveis de instância, são definidas e visíveis apenas dentro da classe
class VariavelInstancia
  
  def initialize
    @privada = "sou privada"
  end

  def mostrar_privada
    puts @privada
  end
end

vi = VariavelInstancia.new
vi.mostrar_privada

# variáveis de classe são visíveis apenas dentro da classe, mas são comum entre todas as instâncias da classe.

class VariavelClasse
  @@contador = 0
  def incrementar
    @@contador += 1
  end
  
  def self.contador
    @@contador
  end
end

vc1 = VariavelClasse.new
vc2 = VariavelClasse.new

puts vc1.incrementar
puts vc2.incrementar
puts VariavelClasse.contador

# variáveis globais começam com $, mas você não deve criá-las, apenas acessar as já existentes:
=begin
$! 	latest error message
$@ 	location of error
$_ 	string last read by gets
$. 	line number last read by interpreter
$& 	string last matched by regexp
$~ 	the last regexp match, as an array of subexpressions
$n 	the nth subexpression in the last match (same as $~[n])
$= 	case-insensitivity flag
$/ 	input record separator
$\ 	output record separator
$0 	the name of the ruby script file
$* 	the command line arguments
$$ 	interpreter's process ID
$? 	exit status of last executed child process
=end

puts $0 # imprime o nome deste arquivo