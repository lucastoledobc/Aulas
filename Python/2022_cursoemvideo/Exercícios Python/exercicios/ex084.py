y1=[]
y2=[]

y4=y5=0

while True:
    x1=str(input('Nome: '))
    y2.append(x1)
    x2=int(input('Peso: '))
    y2.append(x2)
    if y4==y5==0:
        y4=y5=x2
    else:
        if y4<x2:
            y4=x2
        if y5>x2:
            y5=x2
    y1.append(y2[:])
    y2.clear()
    x3=input('Deseja continuar? [S/N] ')
    if x3=='n':
        break

print('-='*30)

print(f'Ao todo, você cadastrou {len(y1)} pessoas.')

print(f'O peso maior foi de {y4} kg. Peso de ', end='')
for c1 in y1:
    if c1[1]==y4:
        print(f'[{c1[0]}]',end=' ')

print(f'\nO peso menor foi de {y5} kg. Peso de ', end='')
for c1 in y1:
    if c1[1]==y5:
        print(f'[{c1[0]}]',end=' ')