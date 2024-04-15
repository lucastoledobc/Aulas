x1=int(input('Em que ano você nasceu? '))
y1=2022-x1

if y1<10:
    y2='mirim'
elif y1<15:
    y2='infantil'
elif y1<20:
    y2='júnior'
elif y1<21:
    y2='Sênior'
elif y1>=22:
    y2='master'
print(f'Pela Confederação Nacional de Natação, sua categoria é {y2}.')