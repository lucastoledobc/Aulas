#Desafio do palíndromo

x1=input('Digite uma frase ou palavra: ').strip()

y1=x1.replace(' ','')
#print(y1)

y2=int(len(y1))
#print(f'y2={y2}\n')

y3=0

for c in range(0,y2):
    if y1[c] == y1[y2 - 1 - c]:
        y3+=0
    else:
        y3+=1
if y3==0:
    print('sim')
else:
    print('não')

#for c in range(0,y2):
#    print(y1[c])
#    print(y1[y2-c-1])
#    if y1[c]==y1[y2-1-c]:
#        print('sim')
#    else:
#        print('não')
