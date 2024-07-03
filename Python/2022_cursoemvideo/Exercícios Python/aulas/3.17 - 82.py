x1=[]
x3=[]
x4=[]

while True:
    x2=int(input('Digite um número: '))
    if x2<0:
        break
    else:
        x1.append(x2)
    if x2%2==0:
        x3.append(x2)
    elif x2%2!=0:
        x4.append(x2)

print(f'x1: {x1}\nx3: {x3}\nx4: {x4}')