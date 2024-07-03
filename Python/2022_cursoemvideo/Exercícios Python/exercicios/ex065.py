x1='s'
y1=0
y2=0
y3=0
y4=0

while x1!='n' and x1=='s':
    x2=int(input('Digite um valor: '))
    y4+=1
    y1+=x2
    if x2>y2:
        y2=x2
    elif x2 < y3:
        y3 = x2
    elif y3==0:
        y3=x2
    x1=str(input('Deseja continuar [S/N]: ')).strip().lower()

print(f'A média dos valores é {y1/y4}.\nO menor valor é {y3}\nE o maior valor é {y2}')
