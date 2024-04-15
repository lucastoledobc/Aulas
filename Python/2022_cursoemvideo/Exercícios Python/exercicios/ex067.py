x1=0

while True:
    x1=int(input('Quer ver a tabuada de que número: '))
    if x1>0:
        for c in range(1,11):
            print(f'{x1} x {c} = {x1*c}')
    else:
        break
print('Programa encerrado.')