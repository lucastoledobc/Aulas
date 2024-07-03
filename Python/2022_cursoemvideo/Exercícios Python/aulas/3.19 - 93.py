y1={}
y2=[]

y1['nome']=str(input('Nome: '))
x1=int(input(f'Quantas partidas {y1["nome"]} jogou? '))
y3=0

for c1 in range(0,x1):
    x2=(int(input(f'Quantos gols {y1["nome"]} fez na partida {c1+1}? ')))
    y3+=x2
    y2.append(x2)

y1['gol']=y2
y1['total']=y3
print(f'{y1["nome"]} jogou {x1} partidas.')
for c1 in range(0,x1):
    print(f'Na partida {c1+1}, {y1["nome"]} fez {y1["gol"][c1]} gols.')