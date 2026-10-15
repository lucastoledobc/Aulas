def leiaInt(a1):
    print(a1.isnumeric())
    if a1.isnumeric==True:
        print(f'Você digitou o número {a1}')
    else:
        print('Erro.')

x1=input('Digite um número: ')
leiaInt(x1)


def leiaInt(a1):
    a2=a1.isnumeric()
    if a2==True:
        print(f'Você digitou o número {a1}')
    else:
        print('Erro.')

x1=input('Digite um número: ')
leiaInt(x1)