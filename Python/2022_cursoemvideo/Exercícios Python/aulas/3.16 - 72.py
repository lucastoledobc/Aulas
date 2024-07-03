y1=('zero','um','dois','tres','quatro','cinco')
x1 = 6
while 0>x1 or x1>5:
    x1=int(input('Digite um número entre 0 e 5: '))

print(f'Você digitou o número {y1[x1]}.')