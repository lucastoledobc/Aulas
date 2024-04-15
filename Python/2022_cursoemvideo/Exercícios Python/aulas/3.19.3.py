estado={}
brasil=[]
for c1 in range(0,3):
    estado['uf']=str(input('Unidade Federetiva: '))
    estado['sigla']=str(input('Sigra do Estado: '))
    brasil.append(estado.copy())

print(brasil)
for e in brasil:
    for k,v in e.items():
        print(f'O campo {k} tem o valor {v}.')