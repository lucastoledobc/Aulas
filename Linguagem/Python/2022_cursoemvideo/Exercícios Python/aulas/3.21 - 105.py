def notas(*n,sit=False):
    x1=len(n)
    x2=0
    for c1 in range(0, len(n)):
        if n[c1]>x2:
            x2=n[c1]
    x3=0
    for c1 in range(0, len(n)):
        if c1==0:
            x3=n[c1]
        if n[c1]<x3:
            x3=n[c1]
    x4=0
    for c1 in range(0,len(n)):
        x4+=n[c1]
    x4=x4/x1
    print(f'total: {x1}, maior {x2}, menor {x3}, média {x4}')
    if sit==True:
        if x4<5:
            print('sit=Ruim')
        else:
            print('sit=Boa')

notas(2,5,6,sit=True)