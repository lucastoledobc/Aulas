from modulos import ex107

p=float(input('Digite o preço: R$ '))
print(f'A metade de {ex107.moeda(p)} vale {ex107.metade(p, False)}')
print(f'O dobro de {ex107.moeda(p)} vale {ex107.dobro(p)}'),
print(f'O aumento de 10% de {ex107.moeda(p)} vale {ex107.aum(p,10,True)}')
print(f'Um desconto de 13% de {ex107.moeda(p)} fica em {ex107.dim(p,13, True)}')

ex107.resumo(p,80,35)