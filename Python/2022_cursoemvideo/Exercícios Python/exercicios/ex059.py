x1=int(input('Primeiro valor: '))
x2=int(input('Segundo valor: '))

x3=1

from time import sleep

while x3!=5:
    x3=int(input('\nO que deseja fazer:\n1 - somar\n2 - multiplicar\n3 - maior\n4 - Novos números\n5 - sair do programa\nEscolha uma opção: \n'))
    if x3==1:
        print(f'A soma dos valores é {x1+x2}')
    elif x3==2:
        print(f'O produto dos valores é {x1*x2}')
    elif x3==3:
        if x1==x2:
            print('Os números são iguais')
        elif x1>x2:
            y1=x1
            print(f'Entre {x1} e {x2} o maior é {y1}')
        elif x1<x2:
            y1=x2
            print(f'Entre {x1} e {x2} o maior é {y1}')

    elif x3==4:
        x1=int(input('Primeiro valor: '))
        x2=int(input('Segundo valor: '))
    elif x3!='12345':
        print('Valor inválido. Tente novamente.')
    sleep(1)
print('Programa finalizado')