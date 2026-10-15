x1=[]

print('Digite quantos valores quiser, digite um número negativo para parar.')

while True:
    x2=int(input('-> '))
    if x2<0:
        break
    else:
        x1.append(x2)

x2=x1[:]

x2.sort(reverse=True)

print(f'Foram digitados {len(x1)} valores. A ordem inversa é {x2}')

if 5 in x1:
    print(f'O número 5 foi encontrado na posição {x2.index(5)}')
else:
    print('Não tem número 5.')