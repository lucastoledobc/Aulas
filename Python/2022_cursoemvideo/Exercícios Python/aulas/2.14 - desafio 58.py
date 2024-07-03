import random

y1=random.randint(1,10)
y2=1
x1= 0

print('O pc escolheu um número de 1 a 10.\n')
while x1!=y1:
    x1=int(input('Qual número você acha que é? '))
    if x1 != y1:
        print('Não é esse.')
        y2+=1

print(f'Você acertou. Foram feitas {y2} tentativas.')