x1=int(input('Qual é a dstância da sua viagem? '))

if x1<=200:
	print(f'O preço da sua passagem será de R${x1/2}.')
else:
	print(f'O preço da sua passagem será de R${x1*0.45}.')