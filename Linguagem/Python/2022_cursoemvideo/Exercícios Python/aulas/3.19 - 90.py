y1={}

x1=str(input('Nome: '))
x2=float(input(f'Média de {x1}: '))

y1['Nome']=x1
y1['Média']=x2

if x2<7:
    y1['Situação']='Reprovado'
else:
    y1['Situação']='Aprovado'

for k,v in y1.items():
    print(f'{k} é igual a {v}')

print(y1)