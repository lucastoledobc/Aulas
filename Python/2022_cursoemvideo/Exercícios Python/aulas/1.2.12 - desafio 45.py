import random

x1=int(input('Qual você escolhe?\n1 - pedra\n2 - papel\n3 - tesoura\n'))
y1=random.randint(1,3)

print(y1)

if x1==y1:
    print('Deu empate.')
elif (x1==1 and y1==2) or (x1==2 and y1==3) or (x1==3 and y1==1):
    print('Você perdeu.')
elif x1==1 and y1==3 or x1==2 and y1==1 or x1==3 and y1==2:
    print('Você ganhou.')

