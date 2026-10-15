x1=int(input('Qual o valor da casa? '))
x2=int(input('Qual seu salário? '))
x3=int(input('Qual o número de mensalidades? '))

y1=int(x2*30/100)
y2=int(x1/x3)

if y2>y1:
    print('O financiamento não pode ser aprovado nessas condições.')

else:
    print('O financiamento foi aprovado!')