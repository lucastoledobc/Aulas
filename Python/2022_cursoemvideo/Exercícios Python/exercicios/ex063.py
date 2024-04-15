print('Sequência de Fibonacci!')

x1=int(input('Quantos termos você deseja? '))

y1=0
y2=1

while x1!=0:
    print(y2, end='->')
    y2+=y1
    y1=y2-y1
    x1-=1
    if x1==0:
        x1 = int(input('\nQuantos mais termos você deseja? '))
print('Fim')