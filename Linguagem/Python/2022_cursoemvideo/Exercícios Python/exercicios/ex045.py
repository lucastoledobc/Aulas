x1=int(input('Suas opções:\n1 - Pedra\n2 - Papel\n3 - Tesoura\nQual você escolhe: '))

import random

z1=random.randint(1,3)

if z1==1:
    b1='pedra'
elif z1==2:
    b1='papel'
elif z1==3:
    b1='tesoura'

if x1==1 and z1==2 or x1==2 and z1==3 or x1==3 and z1==1:
    print(f'O pc escolheu {b1}. Você perdeu.')
elif x1==1 and z1==3 or x1==2 and z1==1 or x1==3 and z1==2:
    print(f'O pc escolheu {b1}. Você ganhou.')
elif x1==z1:
    print(f'O pc escolheu {b1}. Deu empate.')