print('que sorteio?')

import random

a1=input('Primeiro estudante: ')
a2=input('Segundo estudante: ')
a3=input('Terceiro estudante: ')
a4=input('Quarto estudante: ')
b1=[a1,a2,a3,a4]

print(f'\nEstudante sorteado:{random.choice(b1)}')