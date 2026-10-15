import math

print('Qual a hipotenusa?')
x1=float(input('Primeiro diga qual o comprimento de um cateto: '))
x2=float(input('Agora o comprimento do outro cateto: '))
y1=math.sqrt(x1*x1+x2*x2)
print(f'A hipotenusa vale: {y1}')