x1=[]
x3=0
x4="Não"
while True:
    x2=int(input('-> '))
    if x2 <0:
        break
    x3 += 1
    if x2 ==5 :
        x4="Sim"
    x1.append(x2)


x1.sort(reverse=True)

print(x1)
print(x4)