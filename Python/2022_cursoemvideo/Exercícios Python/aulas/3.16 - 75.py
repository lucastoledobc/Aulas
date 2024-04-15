print('Digite 4 valores: ')
x1=int(input('1 - '))
x2=int(input('2 - '))
x3=int(input('3 - '))
x4=int(input('4 - '))

y1=(x1,x2,x3,x4)
y2=0
y3=0

for c in range(0,3):
    y2=y1[c]%2
    if y2==0:
        y3+=1


print(f'a) O número 9 apareceu {y1.count(9)} vezes')

if x1!=3 and x2!=3 and x3!=3 and x4!=4:
    print('b) Não há número 3.')
else:
    print(f'b) O primeiro número 3 está na posição {y1.index(3)+1}')

print(f'c) Temos {y3} números pares.')