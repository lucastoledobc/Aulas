y1=[]
y2=0

x1=input("Digite sua expressão: ")

for c1 in range(0, len(x1)):
    y1.append(x1[c1])
    if x1[c1]=="(":
        y2+=1
    elif x1[c1]==")":
        y2-=1

print(y1)

if y2==0:
    print('Está ok.')
elif y2>0:
    print(f'Falta fechar {y2} parênteses.')
elif y2<0:
    print(f'Falta abrir {-y2} parênteses.')