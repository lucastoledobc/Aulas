y1=[]


while True:
    x1=str(input('Nome: '))
    x2=float(input('Nota 1: '))
    x3=float(input('Nota 2: '))
    y2=(x2+x3)/2
    y1.append([x1,[x2,x3],y2])
    x4=input('Deseja continuar? ')
    if x4=='n':
        break

print('BOLETIM\n')
print('N      NOME               MÉDIA')
for c1 in range(0,len(y1)):
    print(f'{c1+1}{" ":<5} {y1[c1][0]:<18} {y1[c1][2]}')

x3=1
print('')
while True:
    x3=int(input('Deseja ver a nota de alguém? '))
    if x3==0:
        break
    print(f"Nota 1: {y1[x3-1][1][0]}\nNota 2: {y1[x3-1][1][1]}")