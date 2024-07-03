#número primo

x1=int(input("Digite um número: "))

y1=0

for c in range(2,x1+1):
    if x1%c==0:
        y1+=1
    else:
        y1+=0

if y1==1:
    print(f'{x1} é um número primo.')
else:
    print(f'{x1} não é um número primo.')