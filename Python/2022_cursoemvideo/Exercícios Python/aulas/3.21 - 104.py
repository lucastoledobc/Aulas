def leiaint(d):
    if d.isnumeric()==True:
        print('Você digitou um número.')
        global y1
        y1=1
    else:
        print('Erro.')


y1=0
while y1==0:
    x1=input('Digite um número: ')
    leiaint(x1)