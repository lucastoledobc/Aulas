x1=int(input('Escolha um ano qualquer D.C.: '))
y1=x1%4
if y1==0:
	print(f'{x1} é um no bissexto.')
else:
	print(f'{x1} não é uma ano bissexto.')