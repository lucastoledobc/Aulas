x1=0
y1=0
y2=0
while x1!=999:
    x1=int(input('Digite um número inteiro. Se digitar 999 o programa acaba\n'))
    y1+=1
    y2+=x1
print(f'Você digitou {y1-1} valores e a soma foi {y2-999}')