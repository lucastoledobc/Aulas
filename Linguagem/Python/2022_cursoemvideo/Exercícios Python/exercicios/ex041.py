import datetime

x1=int(input('Ano de nascimento: '))

z1=datetime.date.today().year

y1=z1-x1

if y1<=9:
    print(f'Sua idade é {y1}. A categoria é MIRIM.')
elif 9<y1<=14:
    print(f'Sua idade é {y1}. A categoria é INFANTIL.')
elif 14<y1<=19:
    print(f'Sua idade é {y1}. A categoria é JÚNIOR.')
elif 19<y1<=25:
    print(f'Sua idade é {y1}. A categoria é SÊNIOR.')
elif y1>25:
    print(f'Sua idade é {y1}. A categoria é MASTER.')
