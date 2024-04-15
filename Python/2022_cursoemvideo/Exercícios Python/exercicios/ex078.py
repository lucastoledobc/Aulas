y1=[]

for c1 in range(0,5):
    x1=int(input(f'Digite o {c1+1}º número: '))
    y1.append(x1)

y2=y1[:]

y2.sort()

print(f'O menor número é o {y2[0]} na posição {y1.index(y2[0])+1} e o maior é o {y2[4]} na posição {y1.index(y2[4])+1}')

print(f'O menor número é o {y2[0]} na posição',end='')

for i,v in enumerate(y1):
    if v==y2[0]:
        print(f' {i+1}...',end='')

print(f'\nO maior número é o {y2[4]} na posição',end='')

for i,v in enumerate(y1):
    if v==y2[4]:
        print(f' {i+1}...',end='')


