pessoas={'nome': 'Gustavo','sexo':'M','idade': 22}
print(pessoas)
print(pessoas.items())
del pessoas['sexo']

for k,v in pessoas.items():
    print(f'{k} = {v}')