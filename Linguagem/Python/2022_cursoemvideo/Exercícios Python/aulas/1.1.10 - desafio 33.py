print('Escolha 3 números:')
x1=input('1 - ')
x2=input('2 - ')
x3=input('3 - ')
if x1>x2 and x1>x3:
	print(f'O maior número é {x1}.')
elif x2>x1 and x2>x3:
	print(f'O maior número é {x2}.')
else:
	print(f'O maior número é {x3}.')
if x1<x2 and x1<x3:
	print(f'O menor número é {x1}.')
elif x2<x1 and x2<x3:
	print(f'O menor número é {x2}.')
else:
	print(f'O menor número é {x3}.')
