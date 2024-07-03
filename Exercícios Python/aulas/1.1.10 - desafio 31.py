x1=int(input('Qual a distância da sua viagem em km? '))
if x1<200:
	print(f'O valor da passagem será {x1*0.5} reais.')
else:
	print(f'O valor da passagem será de {x1*0.45} reais.')