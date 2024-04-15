print('Escolhas dois números:')
x1=int(input('A - '))
x2=int(input('B - '))
x3=0

while x3!=5:
    x3=int(input('\nVocê deseja:\n[1]- somar\n[2] - multiplicar\n[3] - saber qual é o maior\n[4] - novos números\n[5] - sair do programa\n'))
    if x3==1:
        print(f'A soma é {x1+x2}')
    elif x3==2:
        print(f'O produto é {x1*x2}')
    elif x3==3:
        if x1>x2:
            print(f'O maior número é o {x1}')
        elif x2>x1:
            print(f'O maior número é o {x2}')
        elif x1==x2:
            print(f'O números têm o mesmo valor.')
    elif x3==4:
        x1=int(input('A - '))
        x2=int(input('B - '))
    elif x3==5:
        print('O programa foi encerrado.')