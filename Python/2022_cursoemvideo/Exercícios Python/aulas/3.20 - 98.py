import time

def contador(a,b,c):
    if c==0:
        c=1
    if c<0:
        c*=-1
    print('-'*30)
    if a<b:
        for c1 in range(a,b+1,c):
            print(c1, end=' ')
            time.sleep(.5)
        print()
        print('-'*30)
    elif a>b:
        c *= -1
        for c1 in range(a,b-1,c):
            print(c1, end=' ')
            time.sleep(.5)
        print()
        print('-'*30)


x1=int(input('Início: '))
x2=int(input('Fim: '))
x3=int(input('Passo: '))
contador(x1,x2,x3)