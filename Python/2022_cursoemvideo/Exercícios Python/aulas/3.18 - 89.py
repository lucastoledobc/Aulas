y1=[]
y2=[]
y3=[]

while True:
    x1 = str(input('Nome: '))
    y2.append(x1)

    x2 = float(input('Nota 1: '))
    x3 = float(input('Nota 2: '))
    y4 = (x2+x3)/2
    y3.append(x2)
    y3.append(x3)
    y3.append(y4)
    y2.append(y3[:])
    y1.append(y2[:])
    y2.clear()
    y3.clear()
    x4=input('Deseja continuar: ')
    if x4=='n':
        break

print('\nNº  Nome     Média\n')
for c1 in range (0,len(y1)):
    print(f'{c1}   {y1[c1][0]}     {y1[c1][1][2]}')


while True:
    print('')
    x5=int(input('Deseja saber a nota de qual aluno? '))
    print(f'{y1[x5][0]}: {y1[x5][1][0]} e {y1[x5][1][1]}')
    x4 = input('Deseja continuar: ')
    if x4 == 'n':
        break
