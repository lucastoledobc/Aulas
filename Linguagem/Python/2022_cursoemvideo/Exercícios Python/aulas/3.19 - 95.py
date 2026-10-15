y1=[]
y2={}
y3=[]

while True:
    x1=str(input('Nome do jogador: '))
    y2['nome']=x1
    x2=int(input(f'Quantas partidas {x1} jogou? '))
    y4=0
    for c1 in range(0,x2):
        x3=int(input(f'Quantos gols {x1} fez na partida {c1+1}? '))
        y3.append(x3)
        y4+=x3
    y2['gols']=y3[:]
    y2['total']=y4
    y1.append(y2.copy())
    y3.clear()
    x0=input('Deseja continuar? ')
    if x0=='n':
        break
    print('-'*30)
print('-='*45)
print('cod   nome           gols            total')
print('-'*30)
for c1 in range(0,len(y1)):
    print(f'{c1+1:<5}{y1[c1]["nome"]}{y1[c1]["gols"]}{y1[c1]["total"]}')
print('-'*30)

while True:
    x5=int(input('Mostrar dados de qual jogador? '))
    if x5==0:
        break
    x5-=1
    print(f'Dados do jogador {y1[x5]["nome"]}:')
    for c1 in range(0,len(y1[x5]["gols"])):
        print(f'No jogo {c1+1} fez {y1[x5]["gols"][c1]} gols.')
    print('-' * 25)
    x0=input('Deseja continuar? ')
    if x0=='n':
        break