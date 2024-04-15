y1=0
y2=0
y3=0
y4=str

while True:
    x2=str(input('Digite o nome do produto: '))
    x3=float(input('Qual o preço: '))
    y1+=x3
    if x3>1000:
        y2+=1
    if y3==0:
        y3=x3
        y4=x2
    elif y3>x3:
        y3=x3
        y4=x2
    x1=str(input('Deseja continuar [S/N]: ')).strip().upper()
    if x1=='N':
        break
print(f'O total é {y1:.2f}\n{y2} > 1000\nO mais barato é {y4}, {y3} reais.')