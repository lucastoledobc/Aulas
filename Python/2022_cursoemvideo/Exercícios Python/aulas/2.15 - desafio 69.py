y1=0
y2=0
y3=0

while True:
    x1=input('Qual o sexo dessa pessoa? [M/F] ').strip().upper()
    x2=int(input('Qual a idade? '))
    if x2>=18:
        y1+=1
    if x1=='M':
        y2+=1
    if x1=='F' and x2<21:
        y3+=1
    x3=input('\nDeseja cadastrar mais uma? [S/N] ').strip().upper()
    if x3=='N':
        break
print(y1,y2,y3)