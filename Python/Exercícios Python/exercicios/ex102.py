def fatorial(a1,a2=False):
    """
    Calcula o fatorial de um número
    :param d: o número escolhido
    :param x: (opcional) se você quer ver a conta
    :return: o fatorial do número escolhido.
    """
    b1=1
    for c1 in range(1,a1+1):
        b1*=c1
    print(b1)
    if a2==True:
        for c1 in range(a1,1,-1):
            print(c1,' x ', end='')
        print('1 =',b1)
fatorial(5,True)