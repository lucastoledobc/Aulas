y1=[]
y2=[]

y4=y5=0

y6=[]
y7=[]

while True:
    x1=str(input('Nome: '))
    y2.append(x1)
    x2=int(input('Peso: '))
    y2.append(x2)
    if y4==y5==0:
        y4=y5=x2
        y6.append(x1)
        y7.append(x1)
    else:
        if y4==x2:
            y6.append(x1)
        if y5==x2:
            y7.append(x1)
        if y4<x2:
            y4=x2
            y6.clear()
            y6.append(x1)
        if y5>x2:
            y5=x2
            y7.clear()
            y7.append(x1)
    y1.append(y2[:])
    y2.clear()
    x3=input('Deseja continuar? [S/N] ')
    if x3=='n':
        break

print('-='*30)

print(f'Ao todo, você cadastrou {len(y1)} pessoas.')
print(f'O peso maior foi de {y4} kg. Peso de {y6}')
print(f'O peso menor foi de {y5} kg. Peso de {y7}')