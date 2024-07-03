#x=0
#while x<21:
#    x1=int(input('Escolha um número: '))
#    x+=x1
#    print(x)

import random

y1 = 0
y2 = 0
x1='S'
z1=0

print('Vamos começar.\n')

while x1=='S':
    x2=random.randint(1,10)
    print(f'Você recebeu +{x2}.')
    y1+=x2
    print(f'Sua soma é {y1}.\n')
    x1=input('Deseja uma nova carta? [S/N] ').strip().upper()

print('\nÉ a vez da banca.')

while y2<y1:
    z1=random.randint(1,10)
    print(f'A carta tirada foi: {z1}')
    y2 += z1
    print(f'A soma está em {y2}.\n')
    import time
    time.sleep(2)
print(' ')
if y2<y1<22 or y1<=21<y2:
    print('Você VENCEU! Parabéns!!!')
elif y1<y2<22 or y2<=21<y1:
    print('Você perdeu :(')
elif y1>21 and y2>21:
    print('Empate.')