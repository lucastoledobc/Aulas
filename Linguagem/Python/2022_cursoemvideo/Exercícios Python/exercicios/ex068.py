import random
y3=0

while True:
    x1=int(input('Escolha um número: '))
    x2=str(input('Par ou ímpar [P/I]')).upper()
    if x2=='P':
        y2=0
    elif x2=='I':
        y2=1
    z1=random.randint(1,2)
    print(z1)
    y1=(x1+z1)%2
    if y1==y2:
        print('Parabéns, você ganhou!')
        y3+=1
    elif y1!=y2:
        print('você perdeu.')
        break
print(f'Você ganhou {y3} seguidas.')