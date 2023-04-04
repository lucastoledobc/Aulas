a1=input('Digite seu nome completo: ').strip()
b1=a1.split()[0]
print(f''' 
Seu nome em maiúsculas é {a1.upper()})
Seu nome minúsculas é {a1.lower()}.
Seu nome tem {len(a1)-a1.count(' ')} letras.
Seu primeiro nome é {b1[0]} e tem {len(b1)} letras.''')