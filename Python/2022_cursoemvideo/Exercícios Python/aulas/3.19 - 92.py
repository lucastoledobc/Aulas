import time

y1={}

while True:
    x1=str(input('Nome: '))
    x2=int(input('Ano de nascimento: '))
    x3=int(input('CdT: '))
    y1['nome'] = x1
    y1['idade'] = 2022 - x2
    y1['cdt'] = x3
    if x3!=0:
        x4=int(input('Ano de contratação: '))
        x5=int(input('Salário: '))
        y1['ano'] = x4
        y1['salario'] = x5
        y2=35+x4-x2
        y1['aposentadoria']=y2
    x0=str(input('Deseja continuar: '))
    if x0=='n':
        break
print(y1)
for i,k in y1.items():
    print(f'{i} tem valor {k}')
