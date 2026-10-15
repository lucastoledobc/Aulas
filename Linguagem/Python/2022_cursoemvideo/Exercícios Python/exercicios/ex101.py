def voto(a):
    b1=2022-a
    if b1<16:
        print(f'Com {b1} anos o voto não é permitido.')
    elif 17<b1<66:
        print(f'Com {b1} anos o voto é obrigatório.')
    else:
        print(f'Com {b1} anos o voto é opcional.')

voto(2006)