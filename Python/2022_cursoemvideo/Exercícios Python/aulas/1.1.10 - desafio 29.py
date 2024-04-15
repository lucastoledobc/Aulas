x1=int(input('Velocidade do carro é: '))

if x1<=80:
	print('O carro estava dentro do limite.')
else:
	y1=(x1-80)*7
	print(f'O limite foi ultrapassado. O valor da multa é {y1} reais')

