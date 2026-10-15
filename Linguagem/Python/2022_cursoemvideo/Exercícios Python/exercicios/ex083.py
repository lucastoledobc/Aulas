y1=[]

x1=(input('Digite sua fórmula: '))

y2=0


for c1 in range(0,len(x1)):
    y1.append(x1[c1])
    if y1[c1]=='(':
        y2+=1
    elif y1[c1]==')':
        y2-=1
    if y2<0:
        print('A conta está incorreta. Algum parênteses foi fechado antes de algum ser aberto.')

if y2==0:
    print('A fórmula tá correta.')
else:
    print(f'Falta fechar {y2} parênteses.')