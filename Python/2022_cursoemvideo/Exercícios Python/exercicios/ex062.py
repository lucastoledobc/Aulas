print('Gerador de PA')

x1=int(input('Primeiro termo: '))
x2=int(input('Razão da PA: '))
y1=0

for c1 in range(0,10):
    y1=x1+x2*c1
    print(y1,'->', end=' ')
print('pausa')

x3=int(input('\nDeseja mais quantos termos: '))

while x3!=0:
    x3-=1
    c1+=1
    y1=x1+x2*c1
    print(y1, '->',end=' ')
    if x3==0:
        print('pausa')
        x3 = int(input('\nDeseja mais quantos termos: '))