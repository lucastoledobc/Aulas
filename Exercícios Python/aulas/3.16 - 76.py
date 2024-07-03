y1=('a',1,'b',2.50,'c',2,'d',2.457)

print('Listagem de preço')

for c in range(0,len(y1),2):
    print(f'{y1[c]} ... R$ {y1[c+1]:.2f}')