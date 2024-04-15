x1=0
y3=0
y4=0
import random

while True:
    x1=int(input('\nDiga um valor: '))
    x2=int(input('Você escolhe:\n1 - par\n2 - ímpar\n'))
    y1=random.randint(1,10)
    y2=y1+x1
    print(f'O PC escolheu {y1}, a soma deu {y2}')
    if y2%2==0:
        y3=1
    else:
        y3=2
    if x2==y3:
        print('Você venceu!')
        y4+=1
    else:
        print(f'Você perdeu. Você ganhou {y4} vezes consecutivas.')
        break