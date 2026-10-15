import time

def ajuda():
    while True:
        x1=input('Função ou biblioteca: ')
        if x1=='fim':
            print('FIM')
            break
        print('^'*(22+len(x1)))
        print(f'Acessando o manual de {x1}')
        print('^' *(22+len(x1)))
        time.sleep(1)
        help(x1)


ajuda()