def leiaint(a1):
    while True:
        try:
            n=int(input(a1))
        except (ValueError, TypeError):
            print('Erro: Digite um número inteiro')
            continue
        else:
            return n

x1=leiaint('Digite um valor: ')
print(f'O valor digitado é {x1}.')