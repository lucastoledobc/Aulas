x1=int(input('Primeiro seguimento: '))
x2=int(input('Segundo seguimento: '))
x3=int(input('Terceiro seguimento: '))

if x1>x2+x3 or x2>x1+x3 or x3>x1+x2:
    print('Esses seguimentos não podem formar um triângulo.')
elif x1==x2==x3:
    print('Esse é um triângulo equilátero.')
elif x1==x2 or x1==x3 or x2==x3:
    print('Esse é um triângulo isósceles.')
else:
    print('Esse é um triângulo escaleno.')