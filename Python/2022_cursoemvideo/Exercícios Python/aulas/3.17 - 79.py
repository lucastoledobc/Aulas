x1=[]

while True:
    x2=int(input('-> '))
    if x2 <0:
        break
    if x2 in x1:
        x2=0
    else:
        x1.append(x2)

x1.sort()

print(x1)