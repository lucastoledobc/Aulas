# Termos de uma PA

x1=int(input("Escolha o primeiro termo: "))
x2=int(input("Escolha a razão: "))

for c in range(x1,x1+x2*10,x2):
    print(c,end=" - ")