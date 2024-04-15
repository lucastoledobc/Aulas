x1=int(input('Quanto deseja sacar: '))
y1=y2=y3=y4=0
y1=x1//50
y2=(x1%50)//20
y3=((x1%50)%20)//10
y4=(((x1%50)%20)%10)


print(y1,y2,y3,y4)
from random import randint
n = randint(1,3)

print(n)