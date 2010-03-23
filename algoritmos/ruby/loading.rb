class Loading
	CHARS = '|/-\\'
	def initialize
		@i = 0
	end

	def prt
		print 8.chr + atual
	end

	def atual
		c = CHARS[@i]
		@i = @i > 2 ? 0 : @i + 1
		c.chr
	end
end

loading = Loading.new

for i in 1..50
	sleep 0.25
	loading.prt
end