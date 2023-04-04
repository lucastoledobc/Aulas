y1=[[],[]]

for c1 in range(0,7):
    x1=int(input(f'{c1+1}° número: '))
    if x1%2==0:
        y1[0].append(x1)
    else:
        y1[1].append(x1)
y1[0].sort()
y1[1].sort()
print(y1)