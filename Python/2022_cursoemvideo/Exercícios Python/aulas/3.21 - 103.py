def ficha(d1='<desconhecido>', d2=0):
    print(f'O jogador {d1.capitalize()} fez {d2} gol(s).')


x1 = input('Nome do jogador: ')
x2 = input('Gols: ')

if x1.isalnum()==False:
    ficha(d2=x2)
elif x2.isnumeric()==False:
    ficha(x1)
else:
    ficha(x1,x2)
