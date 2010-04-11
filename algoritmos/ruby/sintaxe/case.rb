x = ARGV.first.to_i

case x
	when 1 then puts "um"
	when 2 then	puts "dois"
end

case x
	when 1: puts "um"
	when 2:	puts "dois"
end

case x
	when 1; puts "um"
	when 2;	puts "dois"
end

case x
	when 1
		puts "um"
	when 2
		puts "dois"
end

class PAR
	def self.===(numero)
		numero % 2 == 0
	end
end

class IMPAR < PAR
	def self.===(numero)
		! super
	end
end

case x
	when PAR
		puts "par"
	when IMPAR
		puts "impar"
end