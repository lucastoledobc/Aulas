x1=float(input('Qual seu peso? '))
x2=float(input('Qual sua altura? '))

y1=x1/x2/x2

print(f'Seu IMC é {y1:.2f}.')

if y1<18.5:
    z1='abaixo do peso.'
elif 18.5<=y1<25:
    z1='peso ideal.'
elif 25<=y1<30:
    z1='sobrepeso.'
elif 30<=y1<40:
    z1='obesidade.'
elif y1>=40:
    z1='obesidade mórbida.'

print(f'Com o peso de {x1} e altura de {x2} m o seu estado é de {z1}')