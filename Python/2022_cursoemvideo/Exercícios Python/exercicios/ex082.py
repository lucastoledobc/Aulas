x1=[]
y1=[]
y2=[]
print('Digite quantos valores quiser, digite um número negativo para parar.')

while True:
    x2=int(input('-> '))
    if x2<0:
        break
    else:
        x1.append(x2)
    if x2%2==0:
        y1.append(x2)
    else:
        y2.append(x2)

print(x1,y1,y2)