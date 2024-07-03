c1=0
x1=1
y1=0
y2=0
y3=0

while x1!=0:
    x1=int(input('Escolha um número: '))
    y1+=x1
    c1+=1
    print(f'A média até agora é {y1/c1}')
    if x1>y2:
        y2=x1
    if c1==1:
        y3=x1
    if x1<y3:
        y3=x1
    print(f'O maior número até agora é {y2}')
    print(f'O menor número até agora é {y3}')
    print('\nSe você digitar 0 o programa acaba.')