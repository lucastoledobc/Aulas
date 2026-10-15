y1=('aprender','programar','linguagem')

y2=y3=y4=y5=y6=y7=y8=y9=y10=0

for c1 in range(0,len(y1)):
    for c2 in range(0,len(y1[c1])):
        if y1[c1][c2] in 'aeiou':
            y2+=1
    print(f'\nNa palavra {y1[c1]}, temos {y2} vogais: ')
    for c2 in range(0,len(y1[c1])):
        if y1[c1][c2] in 'aeiou':
            print(' ',end=y1[c1][c2])
    y2=0