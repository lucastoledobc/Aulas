import random

def maior(*n):
    y1=0
    for c1 in range(0,len(n)):
        if c1==0:
            y1=n[c1]
        else:
            if n[c1]>y1:
                y1=n[c1]
    print(f'Foram digitados {len(n)} números.'
          f'\nA lista é {n}.'
          f'\nO maior é o {y1}')

maior(5,3)
maior(-9,-15)
maior()