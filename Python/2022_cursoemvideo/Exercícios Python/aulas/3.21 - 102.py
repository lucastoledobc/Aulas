def fatorial(d,x=False):
    """
    Calcula o fatorial de um número
    :param d: o número escolhido
    :param x: (opcional) se você quer ver a conta
    :return: o fatorial do número escolhido.
    """
    d1=1
    for c1 in range(1,d+1):
        d1*=c1
    if x==True:
        for c1 in range(d,1,-1):
            print(c1, end=' x ')
        print(f'1 = {d1}')
    else:
        print(d1)

fatorial(5, True)
help(fatorial)