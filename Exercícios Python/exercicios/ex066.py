x1=0
y1=y2=0

while True:
    x1=int(input('Digite um número: '))
    if x1==999:
        break
    y1+=x1
    y2+=1
print(y1)