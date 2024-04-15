y1={}
y2=[]
y4=[]

while True:
    y1['nome']=str(input('Nome: '))
    y1['sexo']=str(input('Sexo: '))
    y1['idade']=int(input('idade: '))
    if y1['sexo']=='f':
        y4.append(y1['nome'])
    y2.append(y1.copy())
    x3=str(input('Deseja continuar: '))
    if x3=='n':
        break
print(y1)
print(y2)
print(y4)
print()
y3=0
for c1 in range(0,len(y2)):
    y3+=y2[c1]['idade']
y3=y3/len(y2)

print(f'a) ', len(y2),
      f'\nb) ', y3,
      f'\nc) ', y4,
      f'\nd) ', end='')

for c1 in range(0,len(y2)):
    if y2[c1]['idade']>y3:
        print(y2[c1]['nome'],end='')