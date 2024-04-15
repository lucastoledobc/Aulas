y1=0
y2=0
y3='ninguém'
y4=0
for c in range(1,5):
    print(f'{c}ª pessoa')
    x1=input('Nome: ').strip()
    x2=int(input('Idade: '))
    x3=input('Sexo [M/F]: ',).strip().upper()
    print('')

    y1+=x2

    if x2>y2 and x3=='M':
        y3=x1

    if x3=='F' and x2<20:
        y4+=1

print(f'A média de idade é {y1/4}.')
print(f'O homem mais velho é {y3}.')
print(f'Tem {y4} mulheres com menos de 20 anos.')