import time

def manual():
    a=0
    while True:
        a=input('função ou biblioteca: ')
        if a=='fim':
            print('\nFIM')
            break
        print('^'*(32+len(a)))
        print(f'Acessando o manual do comendo "{a}"')
        print('^'*(32+len(a)))
        time.sleep(1)
        help(a)

manual()