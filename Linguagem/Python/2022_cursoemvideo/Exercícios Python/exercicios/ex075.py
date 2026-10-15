x1=int(input('Digite um valor: '))
x2=int(input('Digite um valor: '))
x3=int(input('Digite um valor: '))
x4=int(input('Digite um valor: '))

y1=(x1,x2,x3,x4)

print(f'Os valores digitados foram {y1}')

y2=y3=y4=0

print(f'O numero 9 aparece {y1.count(9)} vezes.')

while True:
    if y1[y3]==3:
        print(f'O primeiro número 3 aparece na {y1.index(3)+1}ª posição.')
        y4+=1
        break
    y3+=1
    if y3==4:
        break
if y4==0:
    print('Não há número 3 na lista.')

if 3 in y1:
    print(f'O primeiro número 3 aparece na {y1.index(3) + 1}ª posição.')
else:
    print('Não há número 3 na lista.')

print(f'Os números pares digitados foram: ',end='')

for c1 in range(0,4):
    if y1[c1]%2==0:
        print(y1[c1],end=' ')