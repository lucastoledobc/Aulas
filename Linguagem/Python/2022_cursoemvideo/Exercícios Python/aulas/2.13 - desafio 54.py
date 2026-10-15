#Desafio da idade

import datetime

y1=0
y2=0
y3=int(datetime.date.today().year)

for c in range(1,8):
    x1=int(input('Qual o ano de nascimento: '))
    if y3 - x1 >= 18:
        y1+=1
    else:
        y2+=1

print(f'O número de maiores de idade é {y1}.')
print(f'Tem {y2} menores de idade.')