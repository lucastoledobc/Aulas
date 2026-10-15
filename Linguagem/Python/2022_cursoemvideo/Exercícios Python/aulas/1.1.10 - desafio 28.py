import random

x1=int(input('Tente adivinhar um número que escolh entre 1 e 10: '))
y1=random.randint(1,10)

if x1==y1:
	print('Incrível! Você acertou!')
else:
	print(f'Errado. O número era {y1}.')

