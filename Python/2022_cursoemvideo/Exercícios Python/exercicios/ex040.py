x1=float(input('Primeira nota: '))
x2=float(input('Segunda nota: '))

y1=(x1+x2)/2

if 4<=y1<7:
    print(f'Você está de recuperação. Sua média é {y1:.2f}.')
elif y1<4:
    print(f'Você está reprovador. Sua média é {y1:.2f}.')
elif y1>=7:
    print(f'Parabéns, está aprovado. Sua média é {y1:.2f}.')