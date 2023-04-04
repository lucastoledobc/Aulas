import time

def cont(a,b,c):
    if c==0:
        c=1
    elif c<0:
        c*=-1
    if a<b:
        for c1 in range(a,b+1,c):
            print(c1,end=' ')
            time.sleep(0.3)
    elif b<a:
        for c1 in range(a,b-1,-c):
            print(c1,end=' ')
            time.sleep(0.3)
    print('fim.')


#cont(1,10,1)
print('-='*30)

#cont(10,0,-2)
print('-='*30)

a=int(input('Início: '))
b=int(input('Fim: '))
c=int(input('Passo: '))

cont(a,b,c)