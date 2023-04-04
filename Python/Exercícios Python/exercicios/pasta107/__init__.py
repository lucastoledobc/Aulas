def valor(a):
    print(f'A metade de R$ {a} é R$ {a/2}.')
    print(f'O dobro de R$ {a} é R$ {a*2}.')
    print(f'Aumentando 10%, o valor fica em R$ {a*1.1}')

def moeda(a,a2='R$'):
    return f'{a2} {a:.2f}'.replace('.',',')

def dobro(a, formato=False):
    b=a*2
    return b if formato is False else moeda(b)

def metade(a):
    b=a/2
    return f'R$ {b:.2f}'.replace('.',',')

def aum(a1,a2):
    b=a1*(1+a2/100)
    return f'R$ {b:.2f}'.replace('.',',')

def dim(a1,a2):
    b=a1*(1-a2/100)
    return f'R$ {b:.2f}'.replace('.',',')

def resumo(a1=0,a2=10,a3=5):
    print('-'*30)
    print(f'{"RESUMO DO VALOR":^30}')
    print('-'*30)
    a1=float(a1)
    print(f'Preço analisado: \t{moeda(a1)}')
    print(f'Dobro do preço: \t{dobro(a1, True)}')
    print(f'Metade do preço: \t{metade(a1)}')
    print(f'{a2}% de aumento: \t{aum(a1,a2)}')
    print(f'{a3}% de redução: \t{dim(a1,a3)}')
    print('-' * 30)