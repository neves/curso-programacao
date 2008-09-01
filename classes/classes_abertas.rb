def par?(n)
  n % 2 == 0
end

puts par?(2)
puts par?(3)

class Integer
  def par?
    self % 2 == 0
  end
end

puts 2.par?
puts 3.par?

class Integer
  def impar?
    !par?
  end
end

puts 2.impar?
puts 3.impar?

class Integer
  def fatorial
    if self > 1
      self * (self - 1).fatorial
    else
      1
    end
  end
end

puts 5.fatorial