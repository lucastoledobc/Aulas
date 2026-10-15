y1=[[],[],[]]
y2=y3=y4=0

for c1 in range(0,3):
    for c2 in range(0,3):
        x1=int(input(f'Valor [{c1},{c2}]: '))
        y1[c1].append(x1)
        if x1%2==0:
            y2+=x1
        if c2==2:
            y3+=x1
        if c1==1 and x1>y4:
            y4=x1
for c1 in range(0,3):
    for c2 in range(0,3):
        print(f'[ {y1[c1][c2]:^5} ] ',end='')
    print('')

print(f'A soma dos pares é {y2}.\nA soma da 3 coluna é {y3}.\nO maior número da segunda linha é {y4}')