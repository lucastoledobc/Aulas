x1=int(input('Qual o primeiro valor: '))
x2=int(input('Qual a razão: '))
x3=int(input('Quantos termos você deseja: '))

y1=0

while x3!=0:
    print(x1+x2*y1)
    y1+=1
    if y1==x3:
        x4=int(input('Quantos mais termos deseja? '))
        if x4!=0:
            x3=x3+x4
        elif x4==0:
            x3=0