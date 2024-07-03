import datetime
z1=datetime.date.today().year

y1=0
y2=0

for c in range(1,8):
    x1=int(input('Em que ano você nasceu? '))
    if (z1-x1) < 18:
        y1+=1
    else:
        y2+=1
print(f'São {y1} menores de idade e {y2} maiores de idade')