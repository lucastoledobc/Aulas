x1=list(range(4,11))
print(x1)

x2=[3,5,1,67,23,51,8]
x2.sort()
print(x2)

x2.sort(reverse=True)
print(x2)

print(len(x2))



x3=[]

for c1 in range(0,5):
    x3.append(input(f'{c1} - '))

for c,v in enumerate(x3):
    print(c,v)

x4=x3[:]