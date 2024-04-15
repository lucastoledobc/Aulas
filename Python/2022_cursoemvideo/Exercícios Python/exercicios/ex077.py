y1=('aprender','praticar','programar')

for c1 in range(0,len(y1)):
    print(f'\nA palavra "{y1[c1]}" tem as vogais: ',end='')
    for c2 in range(0,len(y1[c1])):
        if y1[c1][c2] in 'aeiou':
            print(y1[c1][c2],end=' ')

for c1 in y1:
    print(f'\nA palavra "{c1}" tem as vogais: ',end='')
    for c2 in c1:
        if c2 in 'aeiou':
            print(c2,end=' ')