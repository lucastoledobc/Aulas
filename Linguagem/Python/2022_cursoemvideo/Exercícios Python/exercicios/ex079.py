x1=[]

print('Digite quantos valores quiser, digite um número negativo para parar.')

while True:
    x2=int(input('-> '))
    if x2<0:
        break
    if x2 in x1:
        x2=0
        print('Já foi digitado.')
    else:
        x1.append(x2)
x1.sort()
print(f'Os valores digitados foram {x1}')