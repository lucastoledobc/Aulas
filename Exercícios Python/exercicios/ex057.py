x1=input('informe seu sexo [M/F]: ').strip().upper()

while x1!='M' and x1!='F':
    print('Entrada inválida.')
    x1 = input('informe seu sexo [M/F]: ').strip().upper()

print('Obrigado.')

#while x1 not in 'MF':