def jogador(a1='<desconhecido>',a2=0):
    print(f'O jogador {a1.capitalize()} fez {a2} gols.')

x1=input('Nome do jogador: ')
x2=input('Gols: ')

if x1.isalnum()==False and x2.isnumeric()==False:
    jogador()

elif x1.isalnum()==False:
    jogador(a2=x2)

elif x2.isnumeric()==False:
    jogador(x1)

else:
    jogador(x1,x2)