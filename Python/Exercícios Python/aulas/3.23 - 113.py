
y1=y2=0

while True:
    x1 = input('Digite um valor inteiro: ')
    x2 = input('Digite um valor real: ')
    try:
        x1=int(x1)
        x2=float(x2)
        print(f"O número inteiro é {x1}")
        print(f'O numero real é {x2}')
        break
    except ValueError:
        print('Problema no valor')
    finally:
        print('q')


