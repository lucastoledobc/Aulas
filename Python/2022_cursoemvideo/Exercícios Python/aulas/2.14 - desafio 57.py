x1=input('Qual seu sexo?[M/F]  ').strip().upper()

if x1 == 'M' or x1 == 'F':
    print('')

else:
    while x1 != 'M' or x1 != 'F':
        print('Você digitou errado. Tente novamente: ')
        x1 = input('Qual seu sexo?[M/F]  ').strip().upper()

print('Obrigado.')