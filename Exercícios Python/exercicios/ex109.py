import pasta107

x1=float(input('Digite um preço: '))
print(f'A metade de {pasta107.moeda(x1)} vale {pasta107.metade(x1)}')
print(f'O dobro de {pasta107.moeda(x1)} vale {pasta107.dobro(x1, True)}')
print(f'Aumentando 10% de {pasta107.moeda(x1)}, temos {pasta107.aum(x1,10)}')
print(f'Reduzindo 13%, temos {pasta107.dim(x1,13)}')