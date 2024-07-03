y1=[]
y2=[]

y3=0
y4=0
y5=0

for c1 in range(0,3):
    for c2 in range(0,3):
        x1=int(input(f'Digite o falor {c1,c2}: '))
        y2.append(x1)
        if x1%2==0:
            y3+=x1
        if c2==2:
            y4+=x1
        if x1>y5 and c1==1:
            y5=x1
    y1.append(y2[:])
    y2.clear()

print('-='*10)
for c1 in range(0,3):
    for c2 in range(0,3):
        print(f'[ {y1[c1][c2]} ]',end=' ')
    print(' ')

print('-='*10)
print(f'Pares: {y3}\n3ª coluna: {y4}\nMaior 2ª linha: {y5}')