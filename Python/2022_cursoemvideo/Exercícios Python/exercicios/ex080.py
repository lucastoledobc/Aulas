y1=[]

for c1 in range(0,5):
    x1=int(input('Digite um valor: '))
    if c1==0 or x1>=y1[-1]:
        y1.append(x1)
        print(f'O valor {x1} foi adicionado na posição {len(y1)-1}.')
    else:
        if x1<y1[0]:
            y1.insert(0,x1)
            print(f'O valor {x1} foi adicionado na posição 0.')
        else:
            for c2 in range(0,len(y1)-1):
                if y1[c2]<=x1<=y1[c2+1]:
                    y1.insert(c2+1, x1)
                    print(f'O valor {x1} foi adicionado na posição {c2+1}.')
                    break
print(y1)