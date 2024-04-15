print(f'{"-"*20}\nJOGA NA MEGA SENA\n{"-"*20}')

x1=int(input('Quantos jogos você quer sortear? '))

print(f'\n{"-="*5}SORTEANDO {x1} JOGOS{"-="*5}\n')

import random
import time

y1=[]
time.sleep(1)

for c1 in range(0,x1):
    while len(y1)<10:
        z1=random.randint(1,60)
        if z1 not in y1:
            y1.append(z1)
    print(f'Jogo {c1+1}: {y1}')
    y1.clear()
    time.sleep(1)