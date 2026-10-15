import random

print('Vou pensar em um núemro entre 0 e 5. Tente adivinhar...')
x1=int(input('Em que número eu pensei? '))
y1=random.randint(0,5)
if x1==y1:
	print('Parabéns! Você acertou!')
else:
	print(f'GANHEI! Eu pensei no número {y1} e não no {x1}!')