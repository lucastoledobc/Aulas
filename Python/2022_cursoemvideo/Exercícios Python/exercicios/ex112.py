import pasta107

x1 = input('Digite um valor: ')
x1=x1.replace(',', '.').strip()

y1=0
if x1=='' or x1.isalpha()==True:
    y1=1

while y1==1:
    print('ERRO!')
    x1 = input('Digite um valor: ')
    x1 = x1.replace(',', '.')
    if x1.isalpha()==False:
        y1 = 0

x1=float(x1)
print(x1)
pasta107.resumo(x1, 20, 12)
