class Integer
  def fatorial
    if self > 1
      self * (self - 1).fatorial
    else
      1
    end
  end
end

n = ARGV.first.to_i
puts n.fatorial
