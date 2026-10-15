#palíndromo

x1=input('Digite uma frase: ').strip()

y1=x1.replace(' ','')
print(y1)

y2=int(len(y1))
print(y2,'\n')

y3=0

for c in range(1,y2+1):
    print(y1[c-1])
    print(y1[y2-c],'\n')
    if y1[c-1]==y1[y2-c]:
        y3+=0
    else:
        y3+=1

if y3==0:
    print('Essa palavra é um palíndromo.')
else:
    print('Não é um palíndromo.')