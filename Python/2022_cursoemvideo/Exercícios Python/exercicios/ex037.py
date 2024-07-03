x1=int(input('Digite um número inteiro: '))
print('escolha uma das bases para conversão: ')
x2=int(input('1 - BINÁRIO\n2 - OCTAL\n3 - HEXADECIMAL\nSua opção: '))

if x2==1:
    print(f'{x1} convertido para binério é igual à {bin(x1)[2:]}.')
elif x2==2:
    print(f'{x1} convertido para octal é igual à {oct(x1)[2:]}.')
elif x2==3:
    print(f'{x1} convertido para hexadecimal é igual à {hex(x1)[2:]}.')
else:
    print('Opção inválida.')