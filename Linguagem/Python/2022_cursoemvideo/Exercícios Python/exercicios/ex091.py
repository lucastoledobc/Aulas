y1={}
y2=[]

import random

for c1 in range(0,4):
    y1['nome']='jogador {}'.format(c1+1)
    y1['valor']=random.randint(1,6)
    print(y1['valor'])
    if c1==0 or y1['valor']<y2[len(y2)-1]['valor']:
        y2.append(y1.copy())
    else:
        for c2 in range(0,len(y2)):
            if y1['valor']>=y2[c2]['valor']:
                y2.insert(c2,y1.copy())
                break

print('Ranking: ')

for c1 in range(0,4):
    print(f'O {y2[c1]["nome"]} tirou {y2[c1]["valor"]}')