# versao mais clara
def fatorial(n)
  if n > 1
    n * fatorial(n - 1)
  else
    1
  end
end

puts fatorial(5)

# mesma versao acima, em 1 linha
def fatorial2(n)
  if n > 1 then n * fatorial(n - 1) else 1 end
end

puts fatorial2(5)

# usando operador ternário
def fatorial3(n)
  n > 1 ? n * fatorial(n - 1) : 1
end

puts fatorial3(5)