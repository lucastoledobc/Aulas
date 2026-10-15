y1=y2=y3=0

while True:
    x1=str(input('Qual o nome do produto: '))
    x2=int(input('Qual o preço: '))
    y1+=x2
    if x2>1000:
        y2+=1
    if y3==0 or x2<y3:
        y3=x2
    x3=' '
    while x3 not in 'SN':
        x3=str(input('Deseja continuar: ')).strip().upper()
    if x3=='N':
        break
print(f'Total: {y1}\n>1000: {y2}\nMais barato: {y3}')