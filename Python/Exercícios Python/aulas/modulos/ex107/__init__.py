def moeda(n):
    return f'R$ {n:.2f}'

def metade(n, x=False):
    if x==False:
        return n/2
    elif x== True:
        return f'R$ {n/2:.2f}'

def dobro(n, x=False):
    if x == False:
        return n * 2
    elif x == True:
        return f'R$ {n * 2:.2f}'

def aum(n1, n2, x=False):
    if x == False:
        return n1 * (n2/100+1)
    elif x == True:
        return f'R$ {n1 * (n2/100+1):.2f}'

def dim(n1, n2, x=False):
    if x == False:
        return n1*(1-n2/100)
    elif x == True:
        return f'R$ {n1 * (1-n2/100):.2f}'

def resumo(n1, n2, n3):
    print('-'*30)
    print(f"{'RESUMO DO VALOR':^20}")
    print('-'*30)
    n1=int(n1)
    print(f'Preço analisado: R$ {n1:.2f}')
    print(f'Dobro do preço: R$ {n1*2:.2f}')
    print(f'Metade do preço: R$ {n1/2:.2f}')
    print(f'{n2}% de aumento: R$ {n1*(1+n2/100):.2f}')
    print(f'{n3}% de redução: R$ {n1*(1-n3/100):.2f}')
    print('-' * 30)

def ver(x):
    while not x.isnumeric():
        print('ERRO')
        x=input('Digite o preço: ')
    return x