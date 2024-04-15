x1=int(input('Quantos anos o seu carro tem? '))
if x1 <= 3:
	print('carro novo')
else:
	print('carro velho')
print('---FIM---')

x1=int(input('Quantos anos o seu carro tem? '))
print('carro novo' if x1<=3 else 'carro velho')
print('---FIM---')



a1=input('Qual seu nome? ')
if a1=='Lucas':
	print('Bom dia, chefe!')
	print(f'Bom dia, {a1}!')

a1=input('Qual seu nome? ')
if a1=='Lucas':
	print('Bom dia, chefe!')
else:
	print('Que nome estranho.')
	print(f'Bom dia, {x1}!')




x1=float(input('Digite a primeira nota: '))
x2=float(input('Digite a segunda nota: '))
y1=(x1+x2)/2
if y1>=6:
	print('parabéns. Você passou!')
else:
	print('Você está de recuperação')