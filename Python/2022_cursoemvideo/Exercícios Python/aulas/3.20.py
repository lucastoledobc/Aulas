def m(msg):
    print('-'*30)
    print(msg)
    print('-'*30)

m('Oi')
m('tchau')

def soma(a, b):
    print(a+b)

m(soma(1, 2))

def contador(*lis):
    print(lis)
    tam=len(lis)
    print(tam)
    s=0
    for n in lis:
        s+=n
    print(s)

contador(0,2,3,5)