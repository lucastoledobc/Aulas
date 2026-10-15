x1=float(input('QUal o preço do prduto? '))
x2=int(input('Qual é a forma de pagamento?\n1 - à vista dinheiro/cheque\n2 - à vista no cartão\n3 - em até 2x no cartão\n4 - 3x ou mais no cartão\n'))

if x2==1:
    y1 = x1 * 0.9
elif x2==2:
    y1=x1*0.95
elif x2==3:
    y1=x1
elif x2==4:
    y1=x1*1.2


print(f'O preço total a pagar será {y1}.')