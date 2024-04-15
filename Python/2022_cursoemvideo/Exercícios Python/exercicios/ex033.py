x1=input('Primeiro valor: ')
x2=input('Segundo valor: ')
x3=input('Terceiro valor: ')

if x1>x2 and x1>x3:
	print(f'O número {x1} é o maior valor.')
elif x2>x1 and x2>x3:
	print(f'O número {x2} é o maior valor.')
elif x3>x1 and x3>x2:
	print(f'O número {x3} é o maior valor.')

if x1<x2 and x1<x3:
	print(f'O número {x1} é o menor valor.')
elif x2<x1 and x2<x3:
	print(f'O número {x2} é o menor valor.')
elif x3<x1 and x3<x2:
	print(f'O número {x3} é o menor valor.')