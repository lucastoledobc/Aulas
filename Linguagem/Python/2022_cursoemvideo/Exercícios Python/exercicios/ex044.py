x1=float(input('Preço das compras: R$ '))
x2=int(input('Forma de pagamento:\n1 - à vista dinheiro/cheque: 10% de desconto\n 2 - à vista no cartão: 5% de desconto/\n 3 - em até 2x no cartão: preço formal\n 4 x ou mais no cartão: 20% de juros\nQual opção: - '))

if x2==1:
    print(f'O valor a se pagar é {x1*0.9:.2f}.')
elif x2==2:
    print(f'O valor a se pagar é {x1*0.95:.2f}.')
elif x2==3:
    print(f'Serão duas parcelas de {x1/2:.2f}.')
elif x2==4:
    x3=int(input('Quantas parcelas? '))
    y2=x1*1.2
    print(f'O valor total vai ficar em {y2:.2f}. E cada parcela será {y2/x3:.2f}.')
else:
    print('Opção inválida de pagamento.')