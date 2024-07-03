x1=(input('Digite o produto: '), float(input('Seu preço: ')),
    input('Digite o produto: '), float(input('Seu preço: ')),
    input('Digite o produto: '), float(input('Seu preço: ')))

print('LISTAGEM DE PREÇO')

for c1 in range(0,len(x1),2):
    print(f'{x1[c1]:.<20}{x1[c1+1]:.2f}')