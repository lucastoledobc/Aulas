x1=int(input('Quanto quer sacar? '))
y1=0
y2=0
y3=0
y4=0

while True:
    x1-=50
    if x1<0:
        x1+=50
        break
    y1+=1
while True:
    x1-=20
    if x1<0:
        x1+=20
        break
    y2+=1
while True:
    x1-=10
    if x1<0:
        x1+=10
        break
    y3+=1
while True:
    x1-=1
    if x1<0:
        x1+=1
        break
    y4+=1
print(y1,y2,y3,y4)