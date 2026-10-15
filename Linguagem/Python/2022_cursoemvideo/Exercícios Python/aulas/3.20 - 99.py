import time



def maior(*a):
    print('Analisando os valores informados...')
    time.sleep(1)
    y1 = 0
    for c1 in range(0,len(a)):
        print(f'{a[c1]}', end=' ')
        time.sleep(1)
        if a[c1]>y1:
            y1=a[c1]
    print(f'Foram informados {len(a)} valores')
    print(f'O maior valor foi {y1}.')
    print('-='*30)

maior(1,2)