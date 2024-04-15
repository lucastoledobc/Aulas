x1=int(input('Valor da casa: R$'))
x2=int(input('Salário do comprador: R$'))
x3=int(input('Quantos anos de financiamento? '))

y1=x3*12
y2=x2*0.3
y3=x1/y1

if y3>y2:
    print(f'A prestação está em {y3:.2f} e 30% do seu salário é {y2:.2f}. Empréstimo NEGADO!')
elif y3<=y2:
    print(f'A prestação está em {y3:.2f} e 30% do seu salário é {y2:.2f}. Empréstimo APROVADO!')