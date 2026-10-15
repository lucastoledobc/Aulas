x1=int(input('Escolha um número: '))

y1=x1
y2=1

while y1!=1:
    y2=y1*y2
    y1-=1

print(f'{x1}! = {y2}')