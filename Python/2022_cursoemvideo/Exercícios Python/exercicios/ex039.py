import datetime
x1=int(input('Ano de nascimento: '))

y1=int(datetime.date.today().year - x1)
if y1<18:
    print(f'Você completa 18 anos em {x1+18}')

elif y1==18:
    print('Você completa 18 anos esse ano. Precisa se alistar esse ano.')
elif y1>18:
    print(f'Você já devia ter se alistado. Seu alistamento foi em {x1+18}.')