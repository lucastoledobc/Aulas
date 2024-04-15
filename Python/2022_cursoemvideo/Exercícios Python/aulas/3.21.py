def somar(a,b,c=0):
    soma=a+b+c
    return soma

r1=somar(2,5,7)
r2=somar(2,3)

print(f'Os resultados foram {r1} e {r2}.')

def teste(b):
    global a
    a=8
    b+=4
    c=2
    print(a,b,c)

a=5
teste(a)
print(a)
