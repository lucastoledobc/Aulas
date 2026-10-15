y1=[[],[],[]]

for c1 in range(0,3):
    for c2 in range(0,3):
        x1=int(input(f'Valor [{c1},{c2}]: '))
        y1[c1].append(x1)

for c1 in range(0,3):
    for c2 in range(0,3):
        print(f'[ {y1[c1][c2]:^5} ] ',end='')
    print('')