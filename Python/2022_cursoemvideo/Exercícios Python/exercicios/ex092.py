y1={}

import datetime

y1['nome']=str(input('Nome: '))
x1=int(input('Ano de nascimento: '))
y1['idade']=datetime.datetime.now().year-x1
y1['ctps']=int(input('Carteira de trabalho (0 não tem): ' ))
if y1['ctps']!=0:
    y1['ano']=int(input('Ano de contratação: '))
    y1['salario']=int(input('Salario: '))
    y1['aposentadoria']=35+y1['ano']-x1

print('-=' * 30)
for a,b in y1.items():
    print(f'{a} tem valor {b}')
