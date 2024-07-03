x1=int(input('Qual o salário do funcionário: '))

if x1>1250:
	print(f'O novo salário será de {x1*1.1} reais.')
else:
	print(f'O novo salário será de {x1*1.15} reais.')