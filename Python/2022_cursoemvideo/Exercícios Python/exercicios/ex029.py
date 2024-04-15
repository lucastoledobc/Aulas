x1=int(input('Qual a velocidade do carro? '))
if x1>80:
	print(f'MULTADO! Você excedeu o limite permitido que é de 80 Km/h.\nVocê deve pagar uma multa de R${(x1-80)*7:.2f}.')
else:
	print('Tenha um bom dia! Dirija com segurança!')