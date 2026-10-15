x1=int(input('Quantos palpites você quer: '))
y1=[]

print('')

import random
import time

for c1 in range(0,x1):
    for c2 in range(0,6):
        y1.append(random.randint(1,60))
    print(f'Jogo {c1+1}: {y1}')
    time.sleep(1)
    y1.clear()
