import random

def sort(a):
    for c1 in range(0,5):
        z1=random.randint(1,10)
        a.append(z1)
    print(numeros)

def soma(a):
    soma=0
    for c1 in a:
        if c1%2==0:
            soma+=c1
    print(soma)


numeros=[]

sort(numeros)

soma(numeros)