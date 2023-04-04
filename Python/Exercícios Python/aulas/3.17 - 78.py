#x1=[]

#while True:
 #   x2=input('-> ')
 #   if x2 == 'n':
 #       break
 #   x1.append(x2)

#print(x1)

x1=[]

for c1 in range(0,5):
    x1.append(int(input(f'{c1}: ')))

x2=x1[:]
x2.sort()

print(f'O menor é {x2[0]} na posição {x1.index(x2[0])} e o maior é {x2[4]} e {x1.index(x2[4])}.')