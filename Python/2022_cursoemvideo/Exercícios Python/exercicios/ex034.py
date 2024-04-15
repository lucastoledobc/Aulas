x1=float(input('Qual o salário do funcionário? R$'))

if x1>1250:
	print(f'Quem ganhava R${x1:.2f} passa a ganhar R${x1*1.1:.2f} agora.')
else:
	print(f'Quem ganhava R${x1:.2f} passa a ganhar R${x1*1.15:.2f} agora.')