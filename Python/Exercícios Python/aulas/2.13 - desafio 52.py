x1=int(input('Digite um número: '))
y1=0
for c in range(1,x1+1):
    print(x1%c)
    if x1%c==0:
        y1+=1
    else:
        y1+=0
if y1==1:
    print('Ele é primo')
else:
    print('Ele não é primo')

