a1=input('Digite seu nome completo: ')
print(f'Seu nome completo é: {a1.upper()} ou {a1.lower()}.')
b1=a1.strip(' ')
print(b1)
print(f"Seu nome tem {len(b1)-a1.count(' ')} letras.")


b2=a1.split()[0]

print(f"Seu primeiro nome é {b2.capitalize()} e tem {len(b2)} letras.")