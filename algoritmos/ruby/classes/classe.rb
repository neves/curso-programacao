class Pessoa
  attr_accessor :nome, :sobrenome

  def initialize(nome, sobrenome)
    @nome = nome
    @sobrenome = sobrenome
  end

  def nome_completo
    "#{nome} #{sobrenome}"
  end
end

eu = Pessoa.new "Marcos", "Neves"

puts eu.nome_completo