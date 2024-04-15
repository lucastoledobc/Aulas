def voto(d):
    d1=2022-d
    if d1<16:
        print(f"Com {d1} anos, o voto não é permitido.")
    elif 17<d1<66:
        print(f'Com {d1} anos, o voto é obrigatório.')
    else:
        print(f'Com {d1} anos, o voto é opcional.')

voto(1955)