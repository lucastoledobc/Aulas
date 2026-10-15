print('''Sou seu computador...
Acabei de pensar em um número entre 0 e 10.
Será que você consegue adivinhar qual foi?''')

import random
z1=random.randint(1,10)

x1=int(input('Qual seu palpite: '))

y1=1

while x1!=z1:
    y1 += 1
    if x1>z1:
        x1=int(input('Menos... Tente novamente: '))
    elif x1<z1:
        x1=int(input('Mais... Tente novamente: '))

print(f'V ocê acertou depois de {y1} tentativas. Muito bem.')