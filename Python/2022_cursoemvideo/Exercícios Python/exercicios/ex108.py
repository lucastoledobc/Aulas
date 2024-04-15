import pasta107

x1=float(input('Digite um valor R$ '))
print(f'A metade de {pasta107.moeda(x1)} vale {pasta107.metade(x1)}')
print(f'O dobro de {pasta107.moeda(x1)} vale {pasta107.moeda(pasta107.dobro(x1))}')
print(f'Aumentando 10% de {pasta107.moeda(x1)}, temos {pasta107.moeda(pasta107.aum(x1,10))}')