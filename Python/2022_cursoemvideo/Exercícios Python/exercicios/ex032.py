from datetime import datetime

x1=int(input('Que ano quer analisar? '))
y1=x1%4

if x1 == 0:
	x1=datetime.today().year

if y1==0 and x1%100!= 0 or x1%400==0:
	print(f'O ano {x1} é um ano bissexto.')

else:
	print(f'O ano {x1} não é um ano bissexto.')

