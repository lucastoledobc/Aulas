y1=('zero','um','dois','tres','quatro','cinco','seis','sete','oito','nove','dez')

x1=-1

while True:
    x1=int(input('Escolha um número entre 0 e 10: '))
    if -1<x1<11:
        print(f'O número digitado foi {y1[x1]}.')
        x2 = str(input('Deseja continuar? ')).strip().upper()
        while x2 != 'S' and x2 != 'N':
            x2 = str(input('Deseja continuar? ')).strip().upper()
        if x2=='S':
            x1=0
        elif x2=='N':
            break
    else:
        x1=-1



