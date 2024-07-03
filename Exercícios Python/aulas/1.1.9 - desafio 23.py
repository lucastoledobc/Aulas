a1=int(input('Digite um número: '))
b1=f'{a1:0>4}'

print(f'''
unidade: {b1[3]}
dezena: {b1[2]}
centena: {b1[1]}
milhar: {b1[0]}''')