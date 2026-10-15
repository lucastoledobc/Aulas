x1=float(input('Peso da 1ª pessoa: '))

y1=x1
y2=x1

for c in range(2,6):
    x1=float(input(f'Peso da {c}ª pessoa: '))
    if x1>y1:
        y1=x1
    elif x1<y2:
        y2=x1

print(f'O maior peso lido foi de {y1} kg')
print(f'O menor peso lido foi de {y2} kg')