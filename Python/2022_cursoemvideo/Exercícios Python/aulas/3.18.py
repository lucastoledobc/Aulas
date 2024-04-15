x1=[]
x1.append('Lucas')
x1.append(27)

x2=[]
x2.append(x1[:])
x1[0]='Maria'
x1[1]=22

x2.append(x1[:])
#print(x2)

for c1 in x2:
    print(c1)

for c1 in x2:
    print(f'Nome: {c1[0]}\nIdade: {c1[1]} ')