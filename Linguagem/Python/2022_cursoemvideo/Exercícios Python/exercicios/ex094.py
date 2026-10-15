y1=[]
y2={}

while True:
    y2["nome"]=str(input('Nome: '))
    y2["sexo"]=str(input('Sexo: '))
    y2['idade']=int(input('Idade: '))
    y1.append(y2.copy())
    x0=0
    while x0!='s' and x0!='n':
        x0=str(input('Deseja continuar? '))
        if x0=='n' or x0=='s':
            break
    if x0 == 'n':
        break
x1=0
for c1 in range(0,len(y1)):
    x1+=y1[c1]["idade"]
x1=x1/len(y1)

print(f'Ao todo temos {len(y1)} pessoas cadastradas.'
      f'\nA média de idade é de {x1:.2f} anos.'
      f'\nAs mulheres cadastradas foram: ', end='')

for c1 in range(0,len(y1)):
    if y1[c1]["sexo"]=='f':
        print(f'{y1[c1]["nome"]}, ', end='')

print(f'\nA lista de pessoas que estão acima da média são: ')
for c1 in range(0,len(y1)):
    if y1[c1]["idade"]>x1:
        print(f'\nnome= {y1[c1]["nome"]}, sexo= {y1[c1]["sexo"]}, idade= {y1[c1]["idade"]}')