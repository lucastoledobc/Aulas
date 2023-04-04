import random
import time

n=[]

def sorteio(a):
    print('Os valores sorteados foram ',end='')
    for c1 in range(0,a):
        n.append(random.randint(1,9))
        print(n[c1], end=' ')
        time.sleep(1)
    print('Pronto!')

def somaPar():
    z1=0
    for c1 in range(0,len(n)):
        if n[c1]%2==0:
            z1+=n[c1]
    print(f'A soma dos pares foi: {z1}.')

sorteio(6)
somaPar()
