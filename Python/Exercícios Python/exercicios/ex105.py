def notas(*a1,sit=False):
    print(a1)
    x1=x2=x3=0
    for c1 in range(0,len(a1)):
        x3+=a1[c1]
        if a1[c1]>x1:
            x1=a1[c1]
        if c1==0:
            x2=a1[c1]
        elif a1[c1]<x2:
            x2=a1[c1]
    x3=x3/len(a1)
    if sit==False:
        print(f'total {len(a1)}; maior {x1}; menor {x2}; média {x3}')
    elif sit==True:
        print(f'total {len(a1)}; maior {x1}; menor {x2}; média {x3}; situação:', end=' ')
        if x3<5:
            print('Ruim')
        else:
            print('Boa')


notas(9,5,7,4,6, sit=True)