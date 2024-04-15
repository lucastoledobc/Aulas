a1=input('Escreva seu nome completo: ')
b1=a1.split()
b2=int(len(b1))-1
print(f'Seu primeiro nome é {b1[0].capitalize()}\nSeu último nome é {b1[b2].capitalize()}')