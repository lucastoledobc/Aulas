print('Diga o tamanho de 3 retas: ')
x1=int(input('1 - '))
x2=int(input('2 - '))
x3=int(input('3 - '))

if x1<(x2+x3) and x2<(x1+x3) and x3<(x1+x2):
	print('Essas retas podem formar um trângulo.')
else:
	print('Essas retas não podem formar um trângulo.')