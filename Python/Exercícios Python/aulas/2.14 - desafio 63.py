x1=int(input('Escolha um número: '))

if x1==1:
    print('1 -> 1')
else:
    print(f'Os primeiros {x1} números da sequência de fibonacci são: ')

    y1=2
    y2=1
    y3=1
    y4=1

    print('1 -> 1')
    print('2 -> 1')

    while y1!=x1:
        y1+=1
        y2 = y3 + y4
        y4=y3
        y3 = y2

        print(y1,'->',y2)