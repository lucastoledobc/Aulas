import math

print('Pitágoras')

x1=float(input('Qual comprimento do cateto oposto: '))
x2=float(input('QUal comprimento do cateto adjacente: '))
y1=math.sqrt(math.pow(x1,2)+math.pow(x2,2))
print(f'O resultado da hipotenusa é {y1}')