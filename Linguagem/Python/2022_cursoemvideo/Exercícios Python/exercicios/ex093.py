y1={}
y2=[]

y1['nome']=str(input('Nome do jogador: '))
x1=int(input(f'Quantas partidas o {y1["nome"]} jogou: '))

for c1 in range(0,x1):
    x2=int(input(f'Quantos gols na partida {c1+1}: '))
    y2.append(x2)

y1['gols']=y2[:]
y1['total']=sum(y2)

print('-='*30)
for a,b in y1.items():
    print(f'O campo {a} tem valor {b}')
print('-='*30)
print(f'O jogador {y1["nome"]} jogou {x1} partidas:')
for c1 in range(0,x1):
    print(f'   => Na partida {c1+1}, fez {y1["gols"][c1]}.')
print(f'Foi um total de {y1["total"]} gols.')
