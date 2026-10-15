y1=y2=y3=0

while True:
    print('Cadastre uma pessoa:')
    x1=int(input('Idade: '))
    x2=' '
    while x2 not in 'MF':
        x2=str(input('Sexo: ')).strip().upper()
    if x1>17:
        y1+=1
    if x2=='M':
        y2+=1
    if x2=='F' and x1<20:
        y3+=1
    x3=input('Deseja continuar? ').strip().upper()
    if x3=='N':
        break
print(f'Maiores: {y1}\nHomens: {y2}\nMulheres <20: {y3}')