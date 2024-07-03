x1=float(input('Qual o seu peso (Kg)? '))
x2=float(input('Qual sua altura (cm)? '))
y1=x1/x2/x2*10000
print(f'Seu IMC é {y1:.1f}. Sua classificação é ', end='')
if y1<18.5:
        print('Abaixo do peso.')
elif y1<25:
        print('Peso ideal')
elif y1<30:
        print('Sobrepeso.')
elif y1<40:
        print('Obesidade.')
elif y1>=40:
        print('Obesidade mórbida.')