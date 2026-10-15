y1=[]
y2={}
y3=[]
x3=0

while True:
    y2['nome']=str(input('Nome do jogador? '))
    x1=int(input(f'Quantas partidas o {y2["nome"]} jogou? '))
    for c1 in range(0,x1):
        x2=int(input(f'    Quantos gols {y2["nome"]} fez na partida {c1+1}? '))
        y3.append(x2)
        x3+=x2
    y2['gols']=y3[:]
    y2['total']=x3
    y3.clear()
    y1.append(y2.copy())
    x0=x3=0
    while True:
        x0=str(input('Deseja continuar: '))
        if x0 in 'sn':
            break
    if x0=='n':
        break

print('-='*30)
print('cod   nome          gols          total')
for c1 in range(0,len(y1)):
    print(f'{c1+1:<5}{str(y1[c1]["nome"]):<5}{y1[c1]["gols"]}{y1[c1]["total"]}')

while True:
    x3=int(input('Mostrar dados de qual jogador: '))
    if x3==0:
        break
    elif x3<=len(y1):
        x3-=1
        print(f'Levantamento do jogador {y1[x3]["nome"]}:')
        for c1 in range(0,len(y1[x3]["gols"])):
            print(f'No jogo {c1+1} fez {y1[x3]["gols"][c1]} gols')