import random
y1={}
y2=[]

for c1 in range(0,4):
    x1=random.randint(1,6)
    print(f'O jogador {c1+1} tirou {x1}')
    y1['nome']='jogador {}'.format(c1+1)
    y1['valor']=x1
    if c1==0 or x1<=y2[len(y2)-1]['valor']:
        y2.append(y1.copy())
    else:
        for c2 in range(0,len(y2)):
            if x1 >= y2[c2]['valor']:
                y2.insert(c2, y1.copy())
                break

print(f'\nRanking dos jogadores:')
for c in range(0,4):
    print(f'{c+1}º lugar: {y2[c]["nome"]} com {y2[c]["valor"]}')