print('Diga o tamanho de 3 retas:')

x1=float(input('1 - '))
x2=float(input('2 - '))
x3=float(input('3 - '))

if x1==x2==x3:
    z2='equilátero.'
elif x1==x2!=x3 or x2!=x1==x3 or x1!=x2==x3:
    z2='isósceles.'
else:
    z2='escaleno.'

if x1 < (x2 + x3) and x2 < (x1 + x3) and x3 < (x1 + x2):
    z1 = 'formam um triângulo'
else:
    z1 = 'não formam um triângulo.'
    z2 = ''

print(f'Essas 3 retas {z1} {z2}')