y1=[]
y2=[]
y3=[]

for c1 in range(0,7):
    x1=int(input('Número: '))
    if x1%2==0:
        y1.append(x1)
    else:
        y2.append(x1)

y1.sort()
y2.sort()
y3.append(y1)
y3.append(y2)

print(f'Pares: {y1}\nÍmpares: {y2}\n\n{y3}')