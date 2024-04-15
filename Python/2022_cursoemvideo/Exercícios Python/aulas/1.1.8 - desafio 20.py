import random

print('Coloque o nome das equipes a seguir:')
x1=input('1 - ')
x2=input('2 - ')
x3=input('3 - ')
x4=input('4 - ')

y1=[x1,x2,x3,x4]
random.shuffle(y1)

print(f'\nA ordem de apresentação é {y1}')