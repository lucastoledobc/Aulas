x1=[0,0,0,0,0]

for c1 in range(0,5):
    x2=int(input('-'))
    if c1==0:
        x1.insert(0, x2)
    for c2 in range(1, 5):
    if x2>x1[c2]:
        x1.insert(x2,x2)

print(x1)