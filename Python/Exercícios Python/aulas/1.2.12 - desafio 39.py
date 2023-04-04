x1=int(input('Em que ano você nasceu? '))
y1=int(2022-x1)
if y1<18:
    print(f'Ainda falta {18-y1} anos para seu alistamento.')
elif y1==18:
    print('Esse é o ano que você deve ser apresentar para o alistamento.')
elif y1>18:
    print(f'Já passou seu tempo de apresentação. Você devia ter ido {y1-18} anos atrás.')